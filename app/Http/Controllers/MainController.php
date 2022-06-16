<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Applications;
use Illuminate\Http\Request;
use App\Http\Requests\AplicationRequest;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class MainController extends Controller
{
    public function Applications_add(AplicationRequest $request){
        
        $apps = new Applications();
        $apps -> name = $request -> input('name');
        $apps -> email = $request -> input('email');
        $apps -> quest = $request -> input('quest');
        $apps -> message = $request -> input('message');
        $apps -> save();
        return redirect() -> back() -> withSuccess('Ваша заявка успешно отправлена!');
    }
}
