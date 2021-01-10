<?php

namespace App\Http\Controllers;

use App\Table\User;

use Illuminate\Http\Request;

class Register1Controller extends Controller
{
    //register専用コントローラー
    public function registerFunc(Request $req){
        $data = $req->all();
        var_dump($data);
        $user = new User;
        $user->user_id = $req->user;
        $user->password = $req->password;
        $user->mail = $req->mail;
        $user->tel = $req->tel;
        $user->save();
        return view('registerok');
        }

}
