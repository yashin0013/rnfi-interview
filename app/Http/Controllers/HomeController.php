<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function store(Request $request){
        // $request->validate([
        //     'name'=>['required', 'min:3'],
        //     'email'=>['required', 'email'],
        //     'password'=>'required',
        //     'phone'=>'required',
        //     'image'=>'required',
        //     'role'=>'required',
        //     'date'=>'required',
        // ]);
        if (Session::has('userData')){
            $oldData = Session::get('userData');
            $userId = end($oldData)['userId'] + 1;
            $userData = [
                'userId' => $userId,
                'data' => $request->post()
              ];
              Session::push('userData', $userData);
        }else {
            $userData = [
                'userId' => 1,
                'data' => $request->post()
              ];
            $request->session()->push('userData', $userData);
        }
        return redirect('session-data');
    }

    public function session_data(Request $request){
        // $value = Session::get('userData');
        // Session::forget('userData');
        // echo "<pre>";
        // print_r($value);
        return view('session-data');
    }

}