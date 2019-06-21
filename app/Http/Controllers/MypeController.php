<?php

namespace App\Http\Controllers;

use App\mype;
use Illuminate\Http\Request;

class MypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['mype']=Mype::paginate(5);

        return view('moduloMype.vistaMypes', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('moduloMype.agregarMype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$datosMypes=request()->all();
        $datosMype=request()->except('_token', 'enlace_imagen_mype', 'tipo_imagen_mype');
        Mype::insert($datosMype);
        $datosImagenMype=reques()->only('enlaca_imagen_mype', 'tipo_imagen_mype');
        if($request->hasFile('enlace_imagen_mype')){
            $datosImagenMype['enlace_imagen_mype']=$request->file('enlace_imagen_mype')->store('uploads','public');
        }
        //return response()->json($datosMypes);
        return redirect('moduloMype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function show(mype $mype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mype = mype::findOrFail($id);
        return view('moduloMype.editarMype', compact('mype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMype=request()->except(['_token','_method']);
        mype::where('id','=',$id)->update($datosMype);

        $mype = mype::findOrFail($id);
        //return view('moduloMype.editarMype', compact('mype'));
        return redirect('moduloMype');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        mype::destroy($id);
        return redirect('moduloMype');
    }
}
