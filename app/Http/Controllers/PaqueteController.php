<?php

namespace App\Http\Controllers;

use App\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $paquete= Paquete::get();
       echo json_encode($paquete);
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
        //print_r($request->all());
        $paquete= new Paquete();
        $paquete->titulo= $request->input('titulo');
        $paquete->subtitulo= $request->input('subtitulo');
        $paquete->descripcion= $request->input('descripcion');
        $paquete->imagen= $request->input('imagen');
        $paquete->moneda= $request->input('moneda');
        $paquete->precio= $request->input('precio');
        $paquete->estado= $request->input('estado');
        $paquete-> save();
        echo json_encode($paquete);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show(Paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquete $paquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $paquete_id)
    {
        $paquete= Paquete::find($paquete_id);
        $paquete->titulo= $request->input('titulo');
        $paquete->subtitulo= $request->input('subtitulo');
        $paquete->descripcion= $request->input('descripcion');
        $paquete->imagen= $request->input('imagen');
        $paquete->moneda= $request->input('moneda');
        $paquete->precio= $request->input('precio');
        $paquete->estado= $request->input('estado');
        $paquete-> save();
        echo json_encode($paquete);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy($paquete_id)
    {
        $paquete= Paquete::find($paquete_id);
        $paquete->delete();
    }
}
