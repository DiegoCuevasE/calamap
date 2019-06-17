<?php

namespace App\Http\Controllers;

use App\sitioturistico;
use Illuminate\Http\Request;

class SitioturisticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['sitios']=sitioturistico::paginate(5);

        return view('moduloAdmin.vistaSitioAll',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('moduloAdmin.agregarSitioTuristico');

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
        $datoSitioTuristico= request()->all();
        
        $datoSitioTuristico=request()->except('_token','imagenTuristico');
        $datoImagenSitio=request()->only('imagenTuristico');

        if($request->hasFile('imagenTuristico')){

            $datoImagenSitio['imagenTuristico']=$request->file('imagenTuristico')->store('uploads','public');
        }
        sitioturistico::insert($datoSitioTuristico);
        
        return response()->json($datoImagenSitio);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function show(sitioturistico $sitioturistico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_turistico)
    {
        //
        $sitioturistico= sitioturistico::findOrFail($cod_turistico);

        return view('moduloAdmin.editarSitioTuristico',compact('sitioturistico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_turistico)
    {
        //
        $datoSitioTuristico=request()->except(['_token','_method']);
        sitioturistico::where('cod_turistico','=',$cod_turistico)->update($datoSitioTuristico);
        $sitioturistico= sitioturistico::findOrFail($cod_turistico);

        return view('moduloAdmin.editarSitioTuristico',compact('sitioturistico'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_turistico)
    {



        //debe tener el cod_turistico omo id
        sitioturistico::destroy($cod_turistico);
        return redirect('sitioTuristico');
    }
}
