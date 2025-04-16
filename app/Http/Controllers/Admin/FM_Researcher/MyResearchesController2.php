<?php

namespace App\Http\Controllers\Admin\FM_Researcher;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class MyResearchesController2 extends Controller
{
 
    public function __construct(){
        $this->middleware('permission:research_view')->only('index');
        $this->middleware('permission:research_add')->only('create','store');
        $this->middleware('permission:research_file_show')->only('show');
        $this->middleware('permission:research_delete')->only('delete');        
    }

    public function index(Request $request)
    {
        $researches = Research::paginate(perPage: 4);
        return view('University_Pages.FM_Researcher.My_Researches', compact('researches'));
    }

    public function show($id)
    {
        $research = Research::with('media')->where('id',$id)->first();
        return view('University_Pages.FM_Researcher.Research_Details',compact('research'));
    }

    public function create()
    {
        return view('University_Pages.FM_Researcher.Add_Research');
    }

    public function store(Request $request)
    {
        $research = Research::create($request->only('title','abstract','keywords','field','DOI'));

        if($request->hasFile('file')){
            $research->addMultipleMediaFromRequest(['file'])->each(function($fileAdder){
                $fileAdder->toMediaCollection('research');
            });
        }
        return redirect()->route(route: 'researcher-account.my-researches.index');
    }

    public function delete($id)
    {
        $research = Research::where('id',$id)->first();
        $research->delete();
        return redirect()->route(route: 'researcher-account.my-researches.index');

    }
}
