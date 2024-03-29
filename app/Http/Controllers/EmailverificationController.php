<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EmailverificationController extends Controller
{
    public function verifyWithCode(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'otp' => ['required']
        ]);

        $otp = $request['otp'];
        $otpString = implode('', $otp);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('error', 'Invalid input data');
        }
        // Verify user is not already verified
        if (auth()->user()['email_verified_at']) {
            return back()->with('otp-error', 'Email already verified.');
        }
        // Verify otp
        if (Crypt::decrypt(auth()->user()['otp']) != $otpString){
            return back()->with('otp-error', 'Otp is invalid.');
        }
        // Check if token has expired
        if (now()->gt(Carbon::parse(auth()->user()['otp_expiry'])))
            return back()->with('otp-error', 'Otp expired.');
        // Verify email
        auth()->user()->update([
            'email_verified_at' => now()
        ]);
        return redirect('/');
    }

    public function resend(Request $request): \Illuminate\Http\RedirectResponse
    {
        auth()->user()->update([
            'otp' => Crypt::encrypt(random_int(100000, 999999)),
            'otp_expiry' => now()->addHours(3)
        ]);
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }
}
