<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $goodss = Goods::orderBy('created_at')->get();
        return view('admin.goods.index',[
            'goodss' => $goodss
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_goods= new Goods();
        $new_goods->title = $request->title;
        $new_goods->image = $request->image;
        $new_goods->price = $request->price;
        $new_goods->descript = $request->descript;
        $new_goods->description = $request->description;
        $new_goods->characteristics = $request->characteristics;
        $new_goods->save();

        return redirect()->back()->withSuccess('Товар был успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function show(Goods $goods)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goods = Goods::find($id);
        return view('admin.goods.edit',[
            'goods' => $goods
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goods $goods,$id)
    {
        $goods = Goods::find($id);
        $goods->image = $request->get('image');
        $goods->title = $request->get('title');
        $goods->price = $request->get('price');
        $goods->descript = $request->get('descript');
        $goods->description = $request->get('description');
        $goods->characteristics = $request->get('characteristics');

        // $goods->image = $request->image;
        // $goods->title = $request->title;
        // $goods->price = $request->price;
        $goods->save();
        return redirect()->back()->withSuccess('Товар был успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goods $goods, $id)
    {
        Goods::find($id)->delete();
        return redirect()->back()->withSuccess('Товар был успешн удален!');
    }
}
