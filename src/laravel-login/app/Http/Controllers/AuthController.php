<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function showLogin()
    {
       return view('login.login_form');
    }

    /**
     * @param App\Http\Requests\LoginFormRequest $request
     */
    public function login(LoginFormRequest $request)
    {
        if (!empty($request->all())) {
            abort(500);
        }
        dd($request->all());

    }
}
