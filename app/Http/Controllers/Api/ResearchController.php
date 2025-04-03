<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Research;


class ResearchController extends Controller
{
    public function index(Request $request)
    {
        $researches = Research::paginate(3);
        return view('University_Pages.FM_Researcher.My_Researches', compact('researches'));
    }

    public function show($id)
    {
        $research = Research::with('media')->where('id',$id)->first();
        return view('University_Pages.FM_Researcher.Research_Details',compact('research'));
    }

    public function create()
    {
        $researches = Research::get();
        return view('University_Pages.FM_Researcher.Add_Research',compact('researches'));
    }

    public function store(Request $request)
    {
        $research = Research::create($request->only('title','abstract','keywords','field','DOI'));

        if($request->hasFile('file')){
            $research->addMultipleMediaFromRequest(['file'])->each(function($fileAdder){
                $fileAdder->toMediaCollection('research');
            });
        }
        return redirect()->route('Account.My_Researches.Researches');
    }
}
