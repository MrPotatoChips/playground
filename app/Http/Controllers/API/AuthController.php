<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\LoginPostRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginPostRequest $request)
    {
        return $request;
    }
}
