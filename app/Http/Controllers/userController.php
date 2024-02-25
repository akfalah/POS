<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userinfo ($id, $name) {
        $url = route('profile', ['id'=>$id, 'name'=>$name]);

        return view('user', ['id'=>$id, 'name'=>$name, 'url'=>$url]);
    }
}
