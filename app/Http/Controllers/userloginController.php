<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Session;
use App\userModel;

class userloginController extends Controller
{
    public function index()
    {
      return view('content.login');
    }

    public function login(Request $request){
      $this -> validate($request, [
        'username' => 'required',
        'password' => 'required'
      ]);
      $users = userModel::where('username',$request->username)->first();
      if($request->password == $users->password){
        Session::put('id', $users->id);
        return redirect('/dashboard');
      }else{
        dd('404 NOT FOUND');
      }
    }
}
