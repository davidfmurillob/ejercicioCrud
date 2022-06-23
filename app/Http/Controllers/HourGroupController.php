<?php

namespace App\Http\Controllers;

use App\Models\hour_group;
use Illuminate\Http\Request;

class HourGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hour_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambients = new hour_group;
        $ambients->hora_lunes= $request->hora_lunes;
        $ambients->hora_martes= $request->hora_martes;
        $ambients->hora_miercoles = $request->hora_miercoles;
        $ambients->hora_jueves = $request->hora_jueves;
        $ambients->hora_viernes = $request->hora_viernes;
        $ambients->save();
        return redirect()->route('hora_grupos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hour_group  $hour_group
     * @return \Illuminate\Http\Response
     */
    public function show(hour_group $hour_group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hour_group  $hour_group
     * @return \Illuminate\Http\Response
     */
    public function edit(hour_group $hour_group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hour_group  $hour_group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hour_group $hour_group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hour_group  $hour_group
     * @return \Illuminate\Http\Response
     */
    public function destroy(hour_group $hour_group)
    {
        //
    }
}
