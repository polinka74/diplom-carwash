<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user ->name=$request->name;
        // $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        // $user->rules=$request->rules=='on'?'1':'0';
        $user->save();
        return redirect()->back()->withSuccess('Была успешно добавлена!');
        }

}
