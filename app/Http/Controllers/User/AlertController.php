<?php

namespace App\Http\Controllers\User;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AlertController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'condition' => 'required',
            'message' => 'required',
            // 'sound_alert' => 'nullable|boolean',
            // 'highlights' => 'nullable|boolean',
            // 'browser' => 'nullable|boolean',
            // 'telegram_alert' => 'nullable|boolean',
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('error', 'Invalid input data');
        }

        auth()->user()->alerts()->create([
            'name' => $request['name'],
            'condition' => $request['condition'],
            'message' => $request['message'],
            'status' => $request['status'],
            'sound_alert' => $request->has('sound_alert') ? 1 : 0,
            'highlight' => $request->has('highlight') ? 1 : 0,
            'browser' => $request->has('browser') ? 1 : 0,
            'telegram_alert' => $request->has('telegram_alert') ? 1 : 0,
        ]);

        return redirect()->route('alert')->with('success', 'Alert created successfully.');
    }

    public function update(Request $request, Alert $alert)
    {
        $request->validate([
            'name' => 'required',
            'condition' => 'required',
            'message' => 'required',
        ]);

        $alert->update([
            'name' => $request['name'],
            'condition' => $request['condition'],
            'message' => $request['message'],
            'status' => $request['status'],
            'sound_alert' => $request->has('sound_alert') ? 1 : 0,
            'highlight' => $request->has('highlight') ? 1 : 0,
            'browser' => $request->has('browser') ? 1 : 0,
            'telegram_alert' => $request->has('telegram_alert') ? 1 : 0,
        ]);

        return redirect()->route('alert')->with('success', 'Alert updated successfully');
    }

    public function destroy(Alert $alert)
    {
        $alert->delete();

        return redirect()->route('alert')
            ->with('success', 'Alert deleted successfully');
    }
}
