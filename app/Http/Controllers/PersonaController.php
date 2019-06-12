<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = Persona::all();
        return view("persona.index")->with('personas',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $reglas=array(
            'ci'=>'required|numeric|min:1|max:8',
          'nombre'=>'required|string|min:3|max:30',
          'ap_paterno'=>'required|string|min:5|max:15',
          'ap_materno'=>'required|string|min:5|max:15',
          'fecha_nacimiento'=>'required|date',
           'email' => 'required|E-Mail',

        );
        $this->validate($request,$reglas);
        $per=new Persona;
        $per->ci=$request['ci'];
        $per->nombre=$request['nombre'];
        $per->ap_paterno=$request['ap_paterno'];
        $per->ap_materno=$request['ap_materno'];
        $per->fecha_nacimiento=$request['fecha_nacimiento'];
        $per->email=$request['email'];
        $per->save();
        return redirect('persona');
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
