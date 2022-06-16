<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::orderBy('created_at')->get();
        return view('admin.equipment.index',[
            'equipments' => $equipments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_equipment = new Equipment();
        $new_equipment->text = $request->text;
        $new_equipment->image = $request->image;
        $new_equipment->save();

        return redirect()->back()->withSuccess('Оборудование было успешно добавлено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        // $equipment = Equipment::find($id);
        return view('admin.equipment.edit',[
            'equipment' => $equipment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        // $equipment = Equipment::find($id);
        $equipment->image = $request->get('image');
        $equipment->text = $request->get('text');
        $equipment->save();
        return redirect()->back()->withSuccess('Оборудование было успешно обновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipment::find($id)->delete();
        return redirect()->back()->withSuccess('Оборудование было успешно удалено!');
    }
}
