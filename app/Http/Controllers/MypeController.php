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
        $this->validate($request, [
            'idioma_id'=>'required|exist:idiomas,id',
            'servicio_id'=>'required|exist:servicios,id',

        ]);
        return 'todo bien';
        //$datosMypes=request()->all();
        
        $horario=request('d1').' a '.request('d2').' de '.request('h1').' hrs a '.request('h2').' hrs';
        
        $datosmype = new mype();
        $datosmype->user_id=request('user_id');
        $datosmype->nombre_fantasia_mype=request('nombre_fantasia_mype');
        $datosmype->razon_social_mype=request('razon_social_mype');
        $datosmype->direccion_mype=request('direccion_mype');
        $datosmype->descripcion_mype=request('descripcion_mype');
        $datosmype->horario_mype= $horario;
        $datosmype->estado_mype=request('estado_mype');
        $datosmype->telefono_mype=request('telefono_mype');
        $datosmype->celular_mype=request('celular_mype');
        $datosmype->correo_mype=request('correo_mype');
        $datosmype->pagina_mype=request('pagina_mype');
        $datosmype->facebook_mype=request('facebook_mype');
        $datosmype->instagram_mype=request('instagram_mype');
        $datosmype->otra_redS_mype=request('otra_redS_mype');
        $datosmype->save();
        return redirect('moduloMype');

       
        //$datosImagenMype=reques()->only('enlace_imagen_mype', 'tipo_imagen_mype');
        //if($request->hasFile('enlace_imagen_mype')){
        //$datosImagenMype['enlace_imagen_mype']=$request->file('enlace_imagen_mype')->store('uploads','public');
        //}
        //return response()->json($datosMypes);
        //return redirect('moduloMype');
       // return redirect('moduloMype');
    }
    public function getIdiomas(Request $request){
        
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
