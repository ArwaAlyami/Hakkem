<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    // app/Http/Controllers/Reviewer/RequestController.php

    public function index($type = null)
    {
        $query = \App\Models\Request::where('reviewer_id', Auth::id());

        if ($type && in_array($type, ['promotion', 'review', 'publication'])) {
            $query->where('type', $type);
        }

        $requests = $query->get();

        return view('University_Pages.FM_Reviewer_Researcher.My_Requests', compact('requests', 'type'));
    }
    public function show($id) {
        $request = Request::with('researches')->findOrFail($id);
        return view('University_Pages.FM_Reviewer.Request_Details', compact('request'));
    }

    public function accept($id) {
        $request = Request::findOrFail($id);
        $request->status = 'accepted';
        $request->save();

        return redirect()->route('reviewer.requests.index')->with('success', 'Request accepted successfully.');
    }

    public function reject($id) {
        $request = Request::findOrFail($id);
        $request->status = 'rejected';
        $request->save();

        return redirect()->route('reviewer.requests.index')->with('error', 'Request rejected.');
    }

    public function indexx(Request $request)
    {
        $status = $request->query('status'); // يحصل على الفلتر من query string
        $query = RequestModel::where('reviewer_id', auth()->id());

        if ($status && $status != 'all') {
            $query->where('status', $status);
        }

        $requests = $query->get();

        return view('University_Pages.FM_Reviewer.Received_Requests', compact('requests'));
    }

    

}
