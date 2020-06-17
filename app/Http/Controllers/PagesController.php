<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\App\task;

class PagesController extends Controller
{
    public function indexlogin(){
        return view('login');
    }

    public function indexregister(){
        return view('register');
    }

    public function indexadd(){
        return view('add_product');
    }

    public function indexall(){
        return view('all_product');
    }

    public function indexupdate(){
        return view('update_product');
    }

    public function indexview(){
        return view('view_product');
    }
}
