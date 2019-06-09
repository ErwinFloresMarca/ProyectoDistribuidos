<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fixture;
class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f=Fixture::all();
        return view('fixture.index')->with('fixtures',$f);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fixture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //return;
        $reglas=array(
          'nombre'=>'required|string|min:3|max:30',
          'series'=>'required|numeric|min:1|max:8'
        );
        $this->validate($request,$reglas);
        $fix=new Fixture;
        $fix->nombre=$request['nombre'];
        $fix->estado=0;
        $fix->administrador_id=1;
        $fix->save();
        return redirect('/fixture/nuevo')->with('estado','Fixture '.$request['nombre'].' fue creado Exitosamente!!!');
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
        $fixture=Fixture::find($id);
        return view('fixture.edit')->whit('fixture',$fixture);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
