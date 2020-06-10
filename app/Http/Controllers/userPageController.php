<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Session;
use App\userModel;

class userPageController extends Controller
{
    public function SHowUser()
    {
      $users = userModel::all();
      if(Session::has('id')){
          return view('content.dashboard',compact('users'));
      }
      else{
          return redirect('/login');
      }
    }

    public function Delete(Request $request){
      $temp = userModel::where('username',$request->inputan)->first();
      if($temp){
        $temp->delete();
      }else{
        return dd('ga ada');
      }

      return redirect('/dashboard');
    }

    public function logout(){
      Session::flush();
      return redirect('/login');
    }

}
