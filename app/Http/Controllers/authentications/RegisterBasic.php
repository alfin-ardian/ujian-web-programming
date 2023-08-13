<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-register-basic', ['pageConfigs' => $pageConfigs]);
  }

  // post registration
  public function register(Request $request)
  {
    // validate incoming request
    $this->validate($request, [
      'name' => 'required|string',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed',
    ]);

    // save request parameters
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

    // create user
    $user = new User([
      'Name' => $name,
      'Email' => $email,
      'Password' => bcrypt($password)
    ]);

    // save user
    $user->save();
  }
}
