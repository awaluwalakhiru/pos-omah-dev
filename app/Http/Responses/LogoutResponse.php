<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as ContractsLogoutResponse;

class LogoutResponse implements ContractsLogoutResponse
{

    /**
     * toResponse
     *
     * @param  mixed $request
     * @return void
     */
    public function toResponse($request)
    {
        return redirect('/login');
    }
}
