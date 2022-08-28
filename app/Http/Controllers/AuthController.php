<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $korisnik = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $tokenRegistracija = $korisnik->createToken('token_registracija')->plainTextToken;

        return response()->json([
            'Korisnik: ' => $korisnik,
            'Token: ' => $tokenRegistracija
        ]);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $korisnik = User::where('email', $request->email)->first();

        if (!$korisnik || !Hash::check($request->password, $korisnik->password)) {
            return response(['Message: ' => 'Error! Try again!']);
        } else {

            $tokenLogin = $korisnik->createToken('token_login')->plainTextToken;

            return response()->json([
                'Korisnik: ' => $korisnik,
                'Token: ' => $tokenLogin
            ]);
        }
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['Logout']);
    }
}
