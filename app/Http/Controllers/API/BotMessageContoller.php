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
        
        // $webHookURL = "https://coded.vantagehorizon.com/";
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

    public function storeWebhookInfo(Request $request)
    {
        $webhookData = new Webhooks();

        $webhookData->update_id = '10299293';
        $webhookData->message_id = '234564';
        $webhookData->from_id = '10299293';
        $webhookData->from_is_bot = false;
        $webhookData->from_first_name = 'test';
        $webhookData->from_last_name = $messageData['from']['last_name'] ?? null;
        $webhookData->from_username = $messageData['from']['username'] ?? null;
        $webhookData->from_language_code = $messageData['from']['language_code'] ?? null;
        $webhookData->chat_id = '10299293';
        $webhookData->chat_first_name = 'nill';
        $webhookData->chat_last_name = $messageData['chat']['last_name'] ?? null;
        $webhookData->chat_username = $messageData['chat']['username'] ?? null;
        $webhookData->chat_type = 'private';
        $webhookData->date = '10299293';
        $webhookData->text = 'Hello world!';

        $webhookData->save();

        return $webhookData;
    }

    public function setWebhookData(Request $request)
    {
        // $BOT_TOKEN = env('TELEGRAM_TOKEN');

        // $data = file_get_contents('php://input');
        // $decodedData = json_decode($data, true);
        // $messageData = $decodedData['message'];

        // $webhookData = new Webhooks();

        // $webhookData->update_id = $decodedData['update_id'];
        // $webhookData->message_id = $messageData['message_id'];
        // $webhookData->from_id = $messageData['from']['id'];
        // $webhookData->from_is_bot = $messageData['from']['is_bot'];
        // $webhookData->from_first_name = $messageData['from']['first_name'];
        // $webhookData->from_last_name = $messageData['from']['last_name'] ?? null;
        // $webhookData->from_username = $messageData['from']['username'] ?? null;
        // $webhookData->from_language_code = $messageData['from']['language_code'] ?? null;
        // $webhookData->chat_id = $messageData['chat']['id'];
        // $webhookData->chat_first_name = $messageData['chat']['first_name'];
        // $webhookData->chat_last_name = $messageData['chat']['last_name'] ?? null;
        // $webhookData->chat_username = $messageData['chat']['username'] ?? null;
        // $webhookData->chat_type = $messageData['chat']['type'];
        // $webhookData->date = $messageData['date'];
        // $webhookData->text = $messageData['text'];

        // $webhookData->save();

        // return $webhookData->json();
        $token = env('TELEGRAM_TOKEN');

        $data = $request->getContent();
        $getData = json_decode($data, true);

        $userID = $getData['message']['from']['id'];
        $userMessage = $getData['message']['text'];

        if ($userMessage == '/start' || $userMessage == 'Hello') {
            $botMessage = "Welcome Dawg!🚀";
        } else {
            $botMessage = "Hoops 🤔 you are not subscribed to this bot!";
        }
        
        $params = [
            'chat_id' => $userID,
            'text' => $botMessage,
            'parse_mode' => 'HTML'
        ];

        $apiUrl = "https://api.telegram.org/bot" . $token . "/sendMessage";

        $response = Http::get($apiUrl, $params);

        $webhookData = new Webhooks();

        $webhookData->update_id = '10299293';
        $webhookData->message_id = '234564';
        $webhookData->from_id = '10299293';
        $webhookData->from_is_bot = false;
        $webhookData->from_first_name = 'test';
        $webhookData->from_last_name = $messageData['from']['last_name'] ?? null;
        $webhookData->from_username = $messageData['from']['username'] ?? null;
        // $webhookData->from_language_code = $messageData['from']['language_code'] ?? null;
        // $webhookData->chat_id = $getData['chat']['id'];
        // $webhookData->chat_first_name = $getData['chat']['first_name'];
        // $webhookData->chat_last_name = $getData['chat']['last_name'] ?? null;
        // $webhookData->chat_username = $getData['chat']['username'] ?? null;
        // $webhookData->chat_type = $getData['chat']['type'];
        $webhookData->date = $getData['message']['date'];
        $webhookData->text = $getData['message']['text'];

        $webhookData->save();

        return $response->body();

        // return $data;

        // $getData = json_decode($data, true);
        // $userID = $getData['message']['from']['id'];
        // $userMessage = $getData['message']['text'];

        // if ($userMessage == '/start' || $userMessage == 'Hello') {
        //     $botMessage = "Welcome Dawg!🚀";
        // } else {
        //     $botMessage = "Hoops 🤔 you are not subscribed to this bot!";
        // }

        // $params = array(
        //     "chat_id" => $userID,
        //     "text" => $botMessage,
        //     "parse_mode" => 'html'
        // );

        // $api = "https://api.telegram.org/bot{$BOT_TOKEN}/sendMessage";
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $api);
        // curl_setopt($ch, CURLOPT_POST, count($params));
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // $result = curl_exec($ch);
        // curl_close($ch);

        // echo $result;
    }

    public function fetchWebhookData()
    {
        $webhookData = Webhooks::all();

        return response()->json($webhookData);
    }
}