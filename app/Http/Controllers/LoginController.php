<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request, ['email'=>'required', 'password'=>'required']);
    
    if(auth()->attempt(array('email'=>$input['email'], 'password'=> $input['password'])))
    {
        if(auth()->user()->is_admin==1){
                return redirect()->route('admin.main');
        }else{
            return redirect()->route('login');
        }
    }else {
        return redirect()->route('login')->with('error', "Логин или пароль неверны");
    }
}

}
