<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crudpersonas;
use App\Models\ComboUc;
use App\Models\PersonasHis;
use Illuminate\Support\Facades\Auth;

class crudPersonasSepController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
}

    public function index()
    {
        $datos = Crudpersonas::all(); 
        return view('layouts.personas.inicio', compact('datos'));
    }

    public function create()
    {
        $comboUc = ComboUc::all();
        return view('layouts.personas.altas', compact('comboUc'));
/*         return view('layouts.personas.altas'); */
        //el formulario datos
    }

    public function edit($id)
    {
        $comboUc = ComboUc::all();
        $persona = Crudpersonas::find($id);
        return view('layouts.personas.modifica', compact('persona'),compact('comboUc'));
    }


    public function historial()
    {
        $datos = PersonasHis::all();
        return view('layouts.personas.historial', compact('datos'));
    }

    public function ver($id)
    {
        $comboUc = ComboUc::all();
        $persona = PersonasHis::find($id);
        return view('layouts.personas.verHistorial', compact('persona'),compact('comboUc'));
    }


    public function show($id)
    {
        $persona = Crudpersonas::find($id);
        return view('layouts.personas.eliminar', compact('persona'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombres'   => 'required|min:2|max:30',
            'apellido'  => 'required|min:2|max:30',
            'documento' => 'required|min:7|max:8|unique:personas,doc',
            'correo'    => 'required|min:5|max:30',
            'telefono'  => 'required|min:10|max:12',
            'partido'   => 'required|min:3|max:30',
            'localidad' => 'required|min:3|max:30',
            'direccion' => 'required|min:5|max:40',
            'codigo'    => 'required|min:4',
            'referente' => 'required|min:5|max:30',
            'unidad'    => 'required|min:3|max:30',
            'f_inicio'  => 'required',
            'f_alta'    => 'required|min:5|max:30',

        ]);

        $personas = new Crudpersonas() ;
       
        $personas->nombres = $request->post('nombres');
        $personas->apellidos = $request->post('apellido');
        $personas->doc = $request->post('documento');
        $personas->email = $request->post('correo');
        $personas->telefono  = $request->post('telefono');
        $personas->provincia = $request->post('prov');
        $personas->partido   = $request->post('partido');
        $personas->localidad = $request->post('localidad');
        $personas->direccion = $request->post('direccion');
        $personas->cp = $request->post('codigo');
        $personas->referente = $request->post('referente');
        $personas->unidad_ges = $request->post('unidad');
        $personas->fec_ini = $request->post('f_inicio');
        $personas->fec_alta = $request->post('f_alta');
        $personas->usu_ing = $request->post('usuario');
        $personas->save();

        $personash = new PersonasHis();
        $personash->nombres = $request->post('nombres');
        $personash->apellidos = $request->post('apellido');
        $personash->doc = $request->post('documento');
        $personash->email = $request->post('correo');
        $personash->telefono  = $request->post('telefono');
        $personash->provincia = $request->post('prov');
        $personash->partido   = $request->post('partido');
        $personash->localidad = $request->post('localidad');
        $personash->direccion = $request->post('direccion');
        $personash->cp = $request->post('codigo');
        $personash->referente = $request->post('referente');
        $personash->unidad_ges = $request->post('unidad');
        $personash->fec_ini = $request->post('f_inicio');
        $personash->fec_alta = $request->post('f_alta');
        $personash->usu_ing = $request->post('usuario');
        $personash->save();
    
         return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }
 


    public function update(Request $request)
    {

        $this->validate($request, [
            'nombres' => 'required|min:2|max:30',
            'apellido' => 'required|min:2|max:30',
            'documento' => 'required|min:7|max:8',
            'correo' => 'required|min:5|max:30',
            'telefono' => 'required|min:10|max:12',
            'partido' => 'required|min:3|max:30',
            'localidad' => 'required|min:3|max:30',
            'direccion' => 'required|min:5|max:40',
            'codigo' =>    'required|min:4',
            'referente' => 'required|min:5|max:30',
            'unidad' => 'required|min:3|max:30',
            'f_inicio' => 'required',
            'f_alta' => 'required|min:5|max:30',

        ]);

        $personas = Crudpersonas::find($request->id);

        $personas->nombres = $request->post('nombres');
        $personas->apellidos = $request->post('apellido');
        $personas->doc = $request->post('documento');
        $personas->email = $request->post('correo');
        $personas->telefono  = $request->post('telefono');
        $personas->provincia = $request->post('prov');
        $personas->partido   = $request->post('partido');
        $personas->localidad = $request->post('localidad');
        $personas->direccion = $request->post('direccion');
        $personas->cp = $request->post('codigo');
        $personas->referente = $request->post('referente');
        $personas->unidad_ges = $request->post('unidad');
        $personas->fec_ini = $request->post('f_inicio');
        $personas->fec_alta = $request->post('f_alta');
        $personas->save();

        $personash = new PersonasHis();
        $personash->nombres = $request->post('nombres');
        $personash->apellidos = $request->post('apellido');
        $personash->doc = $request->post('documento');
        $personash->email = $request->post('correo');
        $personash->telefono  = $request->post('telefono');
        $personash->provincia = $request->post('prov');
        $personash->partido   = $request->post('partido');
        $personash->localidad = $request->post('localidad');
        $personash->direccion = $request->post('direccion');
        $personash->cp = $request->post('codigo');
        $personash->referente = $request->post('referente');
        $personash->unidad_ges = $request->post('unidad');
        $personash->fec_ini = $request->post('f_inicio');
        $personash->fec_alta = $request->post('f_alta');
        $personash->usu_mod = $request->post('usuario');
        $personash->save();
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy(Request $request)
    {

        $personash = new PersonasHis();
        $personash->nombres = $request->post('nombres');
        $personash->apellidos = $request->post('apellido');
        $personash->doc = $request->post('documento');
        $personash->usu_sup =  Auth::user()->usuario;
        $personash->save();

         $persona = Crudpersonas::find($request->id);
        $persona->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!"); 
    }
}
