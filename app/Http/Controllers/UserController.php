<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    public function RegisterUser(Request $request){
        $user = new User();

        $this->validate($request,[
            'username'=>'required|max:20',
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|max:10',
            'address'=>'required|min:5',
            'password'=>'min:6|required_with:password_confirmation|same:password_confirmation',
        ]);

        $user->user_name = $request->username;
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return view('home')->with('message','Register Successfully');

    }

    public function LoginUser(Request $request){
        $data = $request->only('email','password');

        if(Auth::attempt($data)){
            return  view('home');

        }
        return redirect()->back();
    }

    public function LogOut(){
        Auth::logout();

        return view('home');
    }
}
