<?php

namespace App\Http\Controllers;
use App\clasificado;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ClasificadoController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificado = clasificado::all();
        return $this->showAll($clasificado);
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
            'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
        ];

        $this->validate($request, $reglas);


        $campos = $request->all();


        $clasificado = clasificado::create($campos);
        return $this->showOne($clasificado, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clasificado = clasificado::findOrfail($id);
        return $this->showOne($clasificado);
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
        $clasificado = clasificado::findOrfail($id);

        if($request->has('nombre')){
            $clasificado->nombre = $request->nombre;
        }

        if(!$clasificado->isDirty()){
            return response()->json(['error'=>'Debes de especificar un valor direfente negro si no, no jala', 'code'=>422],422);
        }

        $clasificado->save();
        return response()->json(['data'=>$clasificado, 200]);
        return $this->showOne($clasificado);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clasificado = clasificado::findOrfail($id);
        $clasificado->delete();
        return $this->showOne($clasificado);
    }
}
