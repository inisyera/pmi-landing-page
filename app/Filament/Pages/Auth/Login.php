<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;

class Login extends BaseLogin
{
    public function getHeading(): string
    {
        return 'Selamat datang!';
    }

    public function getSubheading(): string
    {
        return 'Silakan login untuk masuk ke sistem.';
    }

    public function getLogo(): string
    {
        return asset('images/logo.png');
    }
}
