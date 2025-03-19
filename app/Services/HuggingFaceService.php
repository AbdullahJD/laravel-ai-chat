<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HuggingFaceService {
    public function askAI($prompt) {
        // إرسال الـ prompt الذي تم تلقيه من المستخدم
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.hf.api_key'),
            'Content-Type' => 'application/json',
        ])->timeout(60)
        ->post('https://api-inference.huggingface.co/models/EleutherAI/gpt-neo-2.7B', [
            'inputs' => $prompt,  // استخدام المتغير $prompt الذي تم استلامه
        ]);

        // سجل الاستجابة في الـ Logs لتتمكن من رؤية تفاصيلها
        Log::info('HuggingFace API Request:', ['prompt' => $prompt]);
        Log::info('HuggingFace API Response:', ['response' => $response->json()]);

        // إرجاع الاستجابة للنظام
        return $response->json(); // إرجاع البيانات للواجهة
    }
}