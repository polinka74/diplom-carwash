<?php

namespace App\Http\Controllers;
use App\Models\Washing_program;
use Illuminate\Http\Request;
use App\Models\Stage;

class WashController extends Controller
{
    public function index(){
        // $washData = Washing_program::find(3);
        // $washData->Stage;
        // return view('home', compact('washData'));
        $washDataAll = Washing_program::all();
        $stageDataAll= Stage::all();
        return view('wash', compact('washDataAll', 'stageDataAll'));
        
}
}
