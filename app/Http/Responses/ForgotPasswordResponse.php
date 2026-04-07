<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse as ForgotPasswordResponseContract;

class ForgotPasswordResponse implements ForgotPasswordResponseContract
{
    /**
     * toResponse
     *
     * @param  mixed $request
     * @return void
     */
    public function toResponse($request)
    {
        return redirect('/login')->with('status', "We have emailed your password reset link.");
    }
}
