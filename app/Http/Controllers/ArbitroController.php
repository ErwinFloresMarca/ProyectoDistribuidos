<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Arbitro;
use App\Persona;

class ArbitroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (request()->has('empty')) {
            $arbitro = [];
        }else {
         $arbitro = DB::table('personas') ->join('arbitros' , 'arbitros.persona_id','personas.id') -> select('nombre','ap_paterno','ap_materno','arbitros.id')->get();
         $persona= DB::table('personas')
                     ->select('personas.id as idar','nombre','ap_paterno','ap_materno')
                     ->whereNotIn('id', DB::table('arbitros')->select('arbitros.persona_id'))
                     ->get();
        }
         return view('arbitro.index')->with('datos',array(
                                                        'arbitros'=>$arbitro,
                                                        'personas'=>$persona));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('arbitro.create');
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
         $arbitro = Arbitro::find($id);
            return view('arbitro.edit')-> with('arbitro', $arbitro);
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
        
        Arbitro::destroy($id);
        return redirect ('arbitro');
    }
}
