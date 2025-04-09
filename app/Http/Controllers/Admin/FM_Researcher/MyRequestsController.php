<?php

namespace App\Http\Controllers\Admin\FM_Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('University_Pages.FM_Researcher.My_Requests');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('University_Pages.FM_Researcher.Request_Details');
    }


    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
