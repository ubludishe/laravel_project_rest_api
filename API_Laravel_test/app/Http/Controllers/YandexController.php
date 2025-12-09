<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class YandexController extends Controller
{
    public function login(){

        $user = Socialite::driver('yandex')->redirect()->user();

        $user = firstOrCreate(['email' => $user->email()], ['name' => $user->name()], ['password' => bcrypt('123456')]);

        Auth::login($user, true);

        return redirect('/home');
    }

}
