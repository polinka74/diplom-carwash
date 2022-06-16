<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\ReviewsRequest;


class ReviewsController extends Controller
{
    public function reviews(ReviewsRequest $viv) {
        
        $review = new Review();
        $review->name= $viv->input('name');
        $review->message= $viv->input('message');

        $review->save();
        return redirect()->route('home')->with('success', 'Отзыв был добавлен!');
    }
  
    public function allReviews(){
        return view('home', ['reviews'=>Review::latest()->limit(3)->get()->reverse()->where('vivod', '=', 1)]);        
    }
}
