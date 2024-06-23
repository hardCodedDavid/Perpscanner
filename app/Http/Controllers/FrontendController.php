<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\testWebsocket;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function landing() {
        $user = auth()->user();

        return view('landing', ['user' => $user]);
    }

    public function alert() {
        $alerts = auth()->user()->alerts()->latest();

        return view('alert', ['title' => 'Investments', 'alerts' => $alerts->get()]);
    }

    public function screener() {
        return view('index');
    }

    public function overview() {
        return view('overview');
    }

    public function user_alert() {
        return view('user.alert');
    }

    public function test() {
        // Fetch data from the API URL
        $response = Http::get('https://data.orionterminal.com/api/screener');
        $data = $response->json();

        // Broadcast the event
        event(new testWebsocket($data));

        return response()->json(['message' => $data]);
    }
}
