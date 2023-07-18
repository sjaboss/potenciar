<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use Illuminate\Container\Container;


class PersonasController extends Controller
{
    public function index()
    {
        $datos = Personas::orderBy('id', 'desc')->paginate(4);
        return view('layouts.personas.inicio', compact('datos'));
    }

    public function create()
    {
        return view('layouts.personas.altas');
        //el formulario datos
    }

    public function edit($id)
    {

        $persona = Personas::find($id);
        return view('layouts.personas.modifica', compact('persona'));
    }

    public function show($id)
    {
        $persona = Personas::find($id);
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

        $personas = new Personas();
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

        $personas = Personas::find($request->id);

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
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        $persona = Personas::find($id);
        $persona->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
