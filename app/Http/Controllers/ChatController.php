<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HuggingFaceService;

class ChatController extends Controller
{
    protected $huggingFace;

    public function __construct(HuggingFaceService $huggingFace) {
        $this->huggingFace = $huggingFace;
    }

    public function chat(Request $request) {
        $userMessage = $request->input('message');
    
        if (!$userMessage) {
            return response()->json(['reply' => 'يرجى كتابة رسالة!']);
        }
    
        // استدعاء الذكاء الصناعي للرد
        $response = $this->huggingFace->askAI($userMessage);
    
        return response()->json(['reply' => $response['choices'][0]['message']['content'] ?? "عذرًا، لا يمكنني الرد الآن."]);
    }
}