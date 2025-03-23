<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HuggingFaceService {
    public function askAI($prompt) {
        $apiKey = config('services.openrouter.api_key');

        if (!$apiKey) {
            Log::error('❌ OpenRouter API key is missing!');
            return ['error' => 'API key is missing!'];
        }

        $response = Http::withHeaders([
            'Authorization' => "Bearer $apiKey",  // ✅ تأكد من أن التوكين مرسل بشكل صحيح
            'Content-Type' => 'application/json',
        ])->timeout(60)
        ->post('https://openrouter.ai/api/v1/chat/completions', [
            "model" => "mistralai/mistral-7b-instruct:free",
            'messages' => [['role' => 'user', 'content' => $prompt]],
            'max_tokens' => 200,
        ]);

        $jsonResponse = $response->json();

        Log::info('✅ OpenRouter API Request:', ['prompt' => $prompt]);
        Log::info('✅ OpenRouter API Response:', ['response' => $jsonResponse]);

        return $jsonResponse;
    }
}