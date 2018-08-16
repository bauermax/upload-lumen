<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    private $request;

    public function __construct(REquest $request){
      $this->request = $request;
    }


    protected function jwt(User $user) {
      $payload = [
      'iss' => "lumen-jwt", // Issuer of the token
      'sub' => $user->id, // Subject of the token
      'iat' => time(), // Time when JWT was issued.
      'exp' => time() + 60*60 // Expiration time
      ];

      // As you can see we are passing `JWT_SECRET` as the second parameter that will
      // be used to decode the token in the future.
      return JWT::encode($payload, env('JWT_SECRET'));
    }



    public function authenticate(User $user) {

      $this->validate($this->request, [
      'email'     => 'required|email',
      'password'  => 'required'
      ]);
      // Find the user by email
      $user = User::where('email', $this->request->input('email'))->first();


      if (!$user) {return response()->json(['error' => 'Email does not exist.'], 400);}
      // Verify the password and generate the token
      if (Hash::check($this->request->input('password'), $user->password)) {
        return response()->json([
          'token' => $this->jwt($user),
          'email'=> $user->email,
          'name'=> $user->name
        ], 200);
      }
      // Bad Request response
      return response()->json(['error' => 'Email or password is wrong.'], 400);

    }

}
