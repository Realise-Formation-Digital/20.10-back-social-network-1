<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

  function index()
  {
    $response = [
      'Error' => 'Access Denied'
    ];

    return response($response, 403);
  }

  function login(Request $request)
  {
    $user = User::where('email', $request->email)->first();
    if (!$user || !Hash::check($request->password, $user->password)) {
      return response([
        'message' => ['These credentials do not match our records.']
      ], 404);
    }

    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
      'user' => $user,
      'token' => $token
    ];

    return response($response, 201);
  }
}
