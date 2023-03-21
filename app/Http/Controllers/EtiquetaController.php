<?php

namespace App\Http\Controllers;

use App\Models\etiqueta;

use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_etiquetas = Etiqueta::all();

        return $_etiquetas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_etiquetas = new Etiqueta();
        $_etiquetas-> user = $request-> user;
        $_etiquetas-> password = $request->password;
        $_etiquetas-> descripcion = $request->descripcion;
        $_etiquetas -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $_etiquetas = etiqueta::findOrFail($request->id);
        $_etiquetas->user = $request->user;
        $_etiquetas->password = $request->password;
        $_etiquetas->descripcion = $request->descripcion;
        $_etiquetas->save();
        return $_etiquetas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $_etiquetas = etiqueta::destroy($request -> id);

        return $_etiquetas;
    }
}
