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

    public function getWebhookData()
    {
        try {
        // Make HTTP GET request to fetch JSON file
        $response = Http::get('https://coded.vantagehorizon.com/webHookData.json');
            
            // Check if request was successful
            if ($response->successful()) {
                // Extract JSON data from response
                $jsonData = $response->json();
                return $jsonData;
            } else {
                // Handle error if request was not successful
                throw new \Exception("HTTP error! Status: {$response->status()}");
            }
        } catch (\Exception $e) {
            // Handle any exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function setWebhook()
    {
        $BOT_TOKEN = env('TELEGRAM_TOKEN');
        
        $webHookURL = "https://coded.vantagehorizon.com/";

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

    public function setWebhookData()
    {
        $data = file_get_contents('php://input');
        $decodedData = json_decode($data, true);
        $messageData = $decodedData['message'];
        $data = new Webhooks();

        $data->update_id = $decodedData['update_id'];
        $data->message_id = $messageData['message_id'];
        $data->from_id = $messageData['from']['id'];
        $data->from_is_bot = $messageData['from']['is_bot'];
        $data->from_first_name = $messageData['from']['first_name'];
        $data->from_last_name = $messageData['from']['last_name'] ?? null;
        $data->from_username = $messageData['from']['username'] ?? null;
        $data->from_language_code = $messageData['from']['language_code'] ?? null;
        $data->chat_id = $messageData['chat']['id'];
        $data->chat_first_name = $messageData['chat']['first_name'];
        $data->chat_last_name = $messageData['chat']['last_name'] ?? null;
        $data->chat_username = $messageData['chat']['username'] ?? null;
        $data->chat_type = $messageData['chat']['type'];
        $data->date = $messageData['date'];
        $data->text = $messageData['text'];

        $data->save();

        return $data->json();
    }

    public function fetchWebhookData()
    {
        $webhookData = Webhooks::all();

        return response()->json($webhookData);
    }
}