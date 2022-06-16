<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Gallery;
use App\Models\Price;
use App\Models\Washing_program;
use App\Models\Applications;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        $reviews = Review::latest()->limit(3)->get()->reverse()->where('vivod', '=', 1);   
        return view('home', [
            'reviews'=> $reviews,
            'equipments'=>$equipments
        ]);    
       
    }

 
    
    public function contact(){
        $app = new Applications();
        $galleries = Gallery::all();
        return view('contact', [
            'galleries'=>$galleries,
            'applications' => $app -> all(),
        ]);
        
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function adminHome(){

        $goods_count = Goods::All()->count();
        $gallery_count = Gallery::all()->count();
        $equipments_count = Equipment::all()->count();
        $prices_count = Price::all()->count();
        $reviews_count = Review::all()->count();
        $washing_programs_count  = Washing_program::all()->count();
        return view('admin/main',
        ['goods_count'=>$goods_count,
        'gallery_count' => $gallery_count,
        'equipments_count' =>$equipments_count,
        'prices_count'=>$prices_count,
        'reviews_count'=>$reviews_count,
        'washing_programs_count' => $washing_programs_count
        ]);
    }


    public function showPage($id){
        return view('PageProduct', [
            'ProductRow'=>Goods::find($id)
        ]);
    }
}