<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderTestController extends Controller
{
    public function test()
    {
        dd(app()->make('db.factory'));
        // $encrypt = app()->make('encrypter');
        // $password = $encrypt->encrypt('test');
        // dd($password, $encrypt->decrypt($password));
    }
}
