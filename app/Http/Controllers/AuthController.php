<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;

class AuthController extends Controller
{
    public function signup(SignupRequest $request)
    {
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
    }
}
