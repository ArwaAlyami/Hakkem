<?php

namespace App\Http\Controllers\Admin\FM_Researcher;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class MyResearchesController extends Controller
{

    public function index()
    {
        $researches = Research::get();
        return response()->json([
            'status'=>true,
            'msg'=>'good job gritta<3',
            'data'=>$researches
        ]);
    }

    public function store(Request $request)
    {
        $research = Research::create([    
        'title'=> $request->title,
        'abstract'=>$request-> abstract,
        'keywords'=>$request->keywords,
        'field'=>$request->field,
        'DOI'=>$request->DOI,
    ]);
    return response()->json([
        'status'=>true,
        'msg'=>'good job gritta<3',
        'data'=>$research
    ]);

    }
}
