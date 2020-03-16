<?php

namespace App\Http\Controllers;
use App\caso;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CasoController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caso = caso::all();
        return $this->showAll($caso);
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
        $reglas = [
            'tcaso'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
            'activo'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]{2}*$/'],
        ];

        $campos = $request->all();

        $this->validate($request, $reglas);
        $caso = caso::create($campos);
        return $this->showOne($caso, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caso = caso::findOrfail($id);
        return $this->showOne($caso);
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
    public function update(Request $request, $id)
    {
        $caso = caso::findOrfail($id);

        if($request->has('tcaso')){
            $caso->tcaso = $request->tcaso;
        }

        if($request->has('activo')){
            $caso->activo = $request->activo;
        }

        if(!$caso->isDirty()){
            return response()->json(['error'=>'Debes de especificar un valor direfente negro si no, no jala', 'code'=>422],422);
        }

        $caso->save();
        return response()->json(['data'=>$caso, 200]);
        return $this->showOne($caso);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caso = caso::findOrfail($id);
        $caso->delete();
        return $this->showOne($prueba);
    }
}
