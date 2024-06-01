<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Log;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            Log::info('Pengguna sudah memiliki email terverifikasi.', ['user_id' => $request->user()->id]);
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            Log::info('Email pengguna berhasil diverifikasi.', ['user_id' => $request->user()->id]);
            event(new Verified($request->user()));
        } else {
            Log::info('Email pengguna gagal diverifikasi.', ['user_id' => $request->user()->id]);
        }

        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
