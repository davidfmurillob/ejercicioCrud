<?php

namespace App\Http\Controllers;

use App\Models\ambient;
use Illuminate\Http\Request;

class AmbientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(  )
    {
        $ambients = Ambient::simplePaginate(1);
        return view('Ambients.index', compact('ambients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {


        return view('Ambients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambients = new Ambient;
        $ambients->aula_lunes= $request->lunes;
        $ambients->aula_martes= $request->martes;
        $ambients->aula_miercoles = $request->miercoles;
        $ambients->aula_jueves = $request->jueves;
        $ambients->aula_viernes = $request->viernes;
        $ambients->save();
        return redirect()->route('ambientes.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function show(ambient $ambient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ambient = Ambient::find($id);
        return view('Ambients.edit',compact('ambient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idt)
    {
        $ambients = Ambient::find($id);
        $ambients->aula_lunes= $request->lunes;
        $ambients->aula_martes= $request->martes;
        $ambients->aula_miercoles = $request->miercoles;
        $ambients->aula_jueves = $request->jueves;
        $ambients->aula_viernes = $request->viernes;
        $ambients->save();
        return redirect()->route('ambientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ambient=Ambient::findOrFail($id);
        $ambient->delete();
        return redirect()->route('ambientes.index');
    }
}
