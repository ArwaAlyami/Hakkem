<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Research;


class MyResearchesController2 extends Controller
{
    public function index()
    {
        $researches = Research::with('media')->get();
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

    if($request->hasFile('file')){
        $research->addMultipleMediaFromRequest(['file'])->each(function($fileAdder){
            $fileAdder->toMediaCollection('research');
        });    
    }

    return response()->json([
        'status'=>true,
        'msg'=>'good job gritta<3',
        'data'=>$research
    ]);

    }
}
