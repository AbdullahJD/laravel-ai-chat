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

        // التأكد من أن الرسالة ليست فارغة
        if (!$userMessage) {
            return response()->json(['reply' => 'يرجى كتابة رسالة!']);
        }

        // تخصيص الرد في حالة الكلمة "Hello"
        if (strtolower($userMessage) === 'hello') {
            return response()->json(['reply' => 'مرحبًا! كيف يمكنني مساعدتك اليوم؟']);
        }

        // استدعاء الذكاء الصناعي للرد
        $response = $this->huggingFace->askAI($userMessage);

        // التحقق من أن الرد ليس غير مناسب
        if (strpos($response[0]['generated_text'], 'Jesus Christ') !== false) {
            return response()->json(['reply' => 'عذرًا، الرد غير مناسب.']);
        }

        // إعادة الرد إلى واجهة المستخدم
        return response()->json(['reply' => $response[0]['generated_text'] ?? "عذرًا، لا يمكنني الرد الآن."]);
    }
}