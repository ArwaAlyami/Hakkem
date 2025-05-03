<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ChatHistory;
class ChatGPTController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function ask(Request $request)
    {
        $apiKey = env('OPENAI_API_KEY');
        $prompt = $request->input('message');
    
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
            'temperature' => 0.7,
        ]);
    
        $result = $response->json();
        $reply = $result['choices'][0]['message']['content'] ?? 'No response from ChatGPT';
    
        ChatHistory::create([
            'user_id' => auth()->id(),
            'prompt' => $prompt,
            'response' => $reply,
        ]);
    
        return response()->json([
            'reply' => $reply,
        ]);
    }

    public function history()
    {
        $histories = ChatHistory::where('user_id', auth()->id())->latest()->get();
        return view('chat_history', compact('histories'));
    }

}