<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Delegado;
use App\Persona;
class DelegadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$delegado = Delegado::all();
    	$delegado = DB::table('personas')//debemos usar "join"
                     ->join('delegados','delegados.persona_id',
                        'personas.id')
                     ->select('nombre','ap_paterno','ap_materno','user','password','delegados.id')
                     ->get();
        $persona= DB::table('personas')
                     ->select('personas.id as idpe','nombre','ap_paterno','ap_materno')
                     ->whereNotIn('id', DB::table('delegados')->select('delegados.persona_id'))
                     ->get();
        return view('delegado.index')->with('datos',array(
                                                        'delegados'=>$delegado,
                                                        'personas'=>$persona));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    { 
        $persona = Persona::find($id);
        return view('delegado.create')->with('persona',$persona);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = array(
            'user' => 'required|alpha',
            'password' => 'required|alpha_num',
            'password_confir' => 'required|same:password' 
            );
        $mensajes = array(
            'user.required' => 'El campo nombre de usuario es obligatorio',
            'user.alpha' => 'El nombre de usuario no debe contener espacios',
            'password.required' => 'La contraseña es obligatoria',
            'password.alpha_num' => 'La contraseña debe tener números y letras',
            'password_confir.required' => 'La confirmación es requerida',
            'password_confir.same' => 'las contraseñas no coinciden', );
        $errores = $this->validate($request,$reglas,$mensajes);
        if($errores)
        {
            $delegado = new Delegado;
            $delegado->user = $request['user'];
            $delegado->password = $request['password'];
            $delegado->persona_id = $request['id']; 
            $delegado->save();
            return redirect('delegado');
        }
        
        
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
        $delegado = Delegado::find($id);
        /*$persona = DB::table('personas')->select('personas.id','nombre','ap_paterno','ap_materno')
                     ->where('personas.id',)
                     ->get();*/
        return view('delegado.edit')->with('delegado',$delegado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $reglas = array(
            'user' => 'required|alpha',
            'password' => 'required|alpha_num',
            'password_confir' => 'required|same:password' 
            );
        $mensajes = array(
            'user.required' => 'El campo nombre de usuario es obligatorio',
            'user.alpha' => 'El nombre de usuario no debe contener espacios',
            'password.required' => 'La contraseña es obligatoria',
            'password.alpha_num' => 'La contraseña debe tener números y letras',
            'password_confir.required' => 'La confirmación es requerida',
            'password_confir.same' => 'las contraseñas no coinciden', );
        $errores = $this->validate($request,$reglas,$mensajes);
        if($errores)
        {
            $delegado = Delegado::find($request['id']);
            $delegado->user = $request['user'];
            $delegado->password = $request['password'];
            $delegado->persona_id = $request['persona_id'];
            $delegado->save();
            return redirect('delegado');
        }


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Delegado::destroy($id);
        return redirect('delegado');

    }
}
