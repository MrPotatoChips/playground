<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validator = $this->getValidationFactory()->make($request->all(), [
            'email' => 'required|email|unique:users',
            'name'  => 'required',
            'role'  => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        if($validator->fails()) return response()->json([
            "response" => "no-valid-request",
            "required" => $validator->errors()
        ]);

        $user = User::create([
            'email' => $request->email,
            'user_code' => uniqid(),
            'name'  => $request->name,
            'role'  => $request->role,
            'password' => Hash::make($request->password)
        ]);
        
        return response()->json([
            "response" => $user ? "no-error" : "not-inserted",
            "user" => $user
        ]);
    }

    public function view($code)
    {
        $row = User::where("user_code", $code)->first();

        return response()->json([
            "response" => $row ? "no-error" : "not-found",
            "row" => $row
        ]);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
