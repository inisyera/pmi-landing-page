<?php

namespace App\Filament\Auth;

use Filament\Actions\Auth\LoginResponse as BaseLoginResponse;
use Filament\Actions\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\Request;

class Login extends BaseLoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        return redirect()->intended('/admin');
    }
}