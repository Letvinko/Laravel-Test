<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;

class userEditcontroller extends Controller
{
  public function updatePage()
  {
    return view('content.edit');
  }

  public function updateData(Request $request){

    $temp = userModel::where('username',$request->user)->first();
    if ($temp) {
      $temp->username = $request->newUser;
      $temp->save();
    }else{
      dd(404);
    }

    return redirect('/dashboard');
  }
}
