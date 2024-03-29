<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function info()
    {
        try {
            $response = Http::get(env('INFO_API_URL'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);
    
            if ($response->successful()) {
                $info = $response->json();

                return $info;
            } else {
                throw new \Exception("HTTP error! Status: {$response->status()}");
            }
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function screener()
    {
        try {
            $response = Http::get(env('SCREENER_API_URL'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);
    
            if ($response->successful()) {
                $info = $response->json();

                return $info;
            } else {
                throw new \Exception("HTTP error! Status: {$response->status()}");
            }
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function marketData()
    {
        try {
            $response = Http::get(env('SERVER_URL') + '/api/market_data', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);
    
            if ($response->successful()) {
                $info = $response->json();

                return $info;
            } else {
                throw new \Exception("HTTP error! Status: {$response->status()}");
            }
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function candles()
    {
        try {
            $response = Http::get(env('SERVER_URL') + '/api/candles?timeframe=1m&limit=140', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);
    
            if ($response->successful()) {
                $info = $response->json();

                return $info;
            } else {
                throw new \Exception("HTTP error! Status: {$response->status()}");
            }
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function wsScreener()
    {
        try {
            $response = Http::get(env('SCREENER_API_URL'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);
    
            if ($response->successful()) {
                $info = $response->json();

                return $info;
            } else {
                throw new \Exception("HTTP error! Status: {$response->status()}");
            }
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
