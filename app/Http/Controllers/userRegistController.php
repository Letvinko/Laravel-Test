<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;

class userRegistController extends Controller
{
  public function index()
  {
    return view('content.register');
  }

  public function register(Request $request){
    $this -> validate($request, [
      'nama' => 'required',
      'email' => 'required',
      'pass' => 'required'
    ]);

    $users = new userModel();
    $users->username = $request->nama;
    $users->email = $request->email;
    $users->password = $request->pass;    
    $users->save();
    
    return view('content.login');
  }
}
