<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Webhooks;
use Illuminate\Support\Facades\Http;

class BotMessageContoller extends Controller
{
    public function sendMessage(Request $request)
    {
        $token = env('TELEGRAM_TOKEN');
        $chatId = $request->input('chat_id');
        $params = [
            'chat_id' => $chatId,
            'text' => $request->input('text'),
            'parse_mode' => 'HTML'
        ];

        $apiUrl = "https://api.telegram.org/bot" . $token . "/sendMessage";

        $response = Http::get($apiUrl, $params);

        return $response->body();
    }

    public function setWebhook()
    {
        $BOT_TOKEN = env('TELEGRAM_TOKEN');
        
        $webHookURL = "https://perpscanner.com/api/set/webhook/data";

        $api = "https://api.telegram.org/bot{$BOT_TOKEN}/setWebhook?url={$webHookURL}";

        $res = file_get_contents($api);

        return $res;
    }

    public function getWebhookInfo()
    {
        $BOT_TOKEN = env('TELEGRAM_TOKEN');

        $api = "https://api.telegram.org/bot{$BOT_TOKEN}/getWebhookInfo";

        $res = file_get_contents($api);

        return $res;
    }

    public function setWebhookData(Request $request)
    {
        $token = env('TELEGRAM_TOKEN');

        $data = $request->getContent();
        $getData = json_decode($data, true);

        $userID = $getData['message']['from']['id'];
        $userMessage = $getData['message']['text'];

        if ($userMessage == '/start' || $userMessage == 'Hello') {
            $botMessage = "Connected✅";
        } else {
            $botMessage = "Default Message goes here from (perpscanner.com)";
        }
        
        $params = [
            'chat_id' => $userID,
            'text' => $botMessage,
            'parse_mode' => 'HTML'
        ];

        $apiUrl = "https://api.telegram.org/bot" . $token . "/sendMessage";

        $response = Http::get($apiUrl, $params);

        $webhookData = new Webhooks();

        $webhookData->user_id = $getData['message']['from']['id'];
        $webhookData->first_name = $getData['message']['from']['first_name'];
        $webhookData->last_name = $getData['message']['from']['last_name'] ?? null;
        $webhookData->username = $getData['message']['from']['username'] ?? null;
        $webhookData->date = $getData['message']['date'];
        $webhookData->text = $getData['message']['text'];

        $webhookData->save();

        return $response->body();
    }

    public function fetchWebhookData()
    {
        $webhookData = Webhooks::all();

        return response()->json($webhookData);
    }

    public function checkUsername(Request $request)
    {
        $username = $request->input('username');
        $webhookData = Webhooks::where('username', $username)->first();

        if ($webhookData) {
            return response()->json(
                [
                    'exists' => true,
                    'id' => $webhookData->user_id
                ]
            );
        } else {
            return response()->json(['exists' => false]);
        }
    }
}