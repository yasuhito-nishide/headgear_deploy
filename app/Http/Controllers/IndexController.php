<?php

namespace App\Http\Controllers;

use App\Table\User;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //manのページ
    public function man(){
        $user = new User;
    //    書き方　querybild
        $mail = User::where('id','1')->value('mail');

        $value = $user->find(1);

        var_dump($mail);
        
        return view('man',compact('mail'));
    }

    //womanのページ
    public function woman(){
    return view('woman');
    }

    //brandのページ
    public function brand(){
        return view('brand');
        }

    //contactのページ 
    public function contact(){
        return view('contact');
    }

    //新規登録のページ
    public function register(){
        return view('register');
    }


}

