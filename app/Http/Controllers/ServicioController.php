<?php

namespace App\Http\Controllers;

use App\servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['servicio']=Servicio::paginate(5);

        return view('pruebasServicio.vistaServicios', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pruebasServicio.agregarServicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosServicio=request()->except('_token');
        Servicio::insert($datosServicio);
        return redirect('pruebasServicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $servicio = servicio::findOrFail($id);
        return view('pruebasServicio.editarServicio', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosServicio=request()->except(['_token','_method']);
        mype::where('id','=',$id)->update($datosServicio);

        $mype = mype::findOrFail($id);
        return view('moduloServicio.editarServicio', compact('servicio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        servicio::destroy($id);
        return redirect('pruebasServicio');
    }
}
