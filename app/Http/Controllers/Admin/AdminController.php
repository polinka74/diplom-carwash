<?php

namespace App\Http\Controllers\Admin;
use App\Models\Goods;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Equipment;
use App\Models\Review;
use App\Models\Washing_program;

class AdminController extends Controller
{
    public function index(){
        
        $goods_count = Goods::All()->count();
        $gallery_count = Gallery::all()->count();
        
        $equipments_count = Equipment::all()->count();
        $prices_count = Price::all()->count();
        $reviews_count = Review::all()->count();
        $washing_programs_count  = Washing_program::all()->count();
        return view('admin.main', 
        ['goods_count'=>$goods_count,
        'gallery_count' => $gallery_count,
        'equipments_count' =>$equipments_count,
        'prices_count'=>$prices_count,
        'reviews_count'=>$reviews_count,
        'washing_programs_count' => $washing_programs_count
        ]);
    }
}


