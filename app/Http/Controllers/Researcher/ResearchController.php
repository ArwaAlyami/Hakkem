<?php

namespace App\Http\Controllers\Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Research;
use Illuminate\Support\Facades\Auth;

class ResearchController extends Controller
{

public function index()
{
    $researches = Research::where('researcher_id', Auth::id())->get();

    return view('University_Pages.FM_Reviewer.My_Researches', compact('researches'));
}

public function destroy($id)
{
    $research = Research::where('researcher_id', Auth::id())->findOrFail($id);
    $research->delete();

    return redirect()->route('researcher-account.my-researches')->with('success', 'Research deleted successfully.');
}

public function create() {
    return view('University_Pages.FM_Reviewer.Add_Research');
}


public function store(Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'DOI' => 'nullable|string|max:255',
        'field' => 'required|string|max:255',
        'keywords' => 'nullable|string',
        'abstract' => 'nullable|string',
        'pdf_file' => 'nullable|mimes:pdf|max:10000',
    ]);


    $research = new Research();
    $research->title = $request->title;
    $research->DOI = $request->DOI;
    $research->field = $request->field;
    $research->keywords = $request->keywords;
    $research->abstract = $request->abstract;
    $research->researcher_id = auth()->id();


    if ($request->hasFile('pdf_file')) {
        $fileName = time() . '_' . $request->file('pdf_file')->getClientOriginalName();
        $filePath = $request->file('pdf_file')->storeAs('public/researches', $fileName);
        $research->pdf_path = $fileName;
    }

    $research->save();

    return redirect()->route('researcher-account.my-researches')->with('success', 'Research added successfully!');
}


}
