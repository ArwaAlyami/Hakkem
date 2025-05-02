<?php

namespace App\Http\Controllers\Journal;
use App\Models\ResearchRequest;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Research;
use App\Models\Reviewer;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class  PromotionAdminController extends Controller
{


        public function showAcceptedRequest($id)
        {
            $request = ResearchRequest::findOrFail($id);


            $feedbacks = $request->feedbacks;


            return view('promotion_admin.accepted_request_details', compact('request', 'feedbacks'));
        }

        public function showEditors($researchId)
        {
            $research = ResearchRequest::findOrFail($researchId);
            $editors = User::where('role', 'editor')->get();

            return view('PromotionAdmin.ChooseEditor', compact('research', 'editors'));
        }


        public function assignEditor(Request $request)
        {
            $request->validate([
                'editor_id' => 'required|exists:users,id',
                'research_id' => 'required|exists:research_requests,id',
            ]);

            DB::table('users')('editor_research')->insert([
                'editor_id' => $request->editor_id,
                'research_id' => $request->research_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);



            return redirect()->back()->with('success', 'Editor assigned successfully.');
        }




    }











