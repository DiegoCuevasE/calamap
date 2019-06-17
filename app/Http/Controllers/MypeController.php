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

        return view('mype.vistaMypes', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mype.agregarMype');
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
        $datosMype=request()->except('_token');
        Mype::insert($datosMype);
        //return response()->json($datosMypes);
        return redirect('mype');
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
    public function edit($cod_mype)
    {
        //
        $mype = mype::findOrFail($cod_mype);
        return view('mype.editarMype', compact('mype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_mype)
    {
        //
        $datosMype=request()->except(['_token','_method']);
        mype::where('cod_mype','=',$cod_mype)->update($datosMype);

        $mype = mype::findOrFail($cod_mype);
        return view('mype.editarMype', compact('mype'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_mype)
    {
        //
        mype::destroy($cod_mype);
        return redirect('mype');
    }
}
