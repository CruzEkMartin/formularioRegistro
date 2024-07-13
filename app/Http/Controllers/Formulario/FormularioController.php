<?php

namespace App\Http\Controllers\Formulario;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('formulario.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //validamos
        $validate_array = [];
        $validate_message = [];

        $validate_array = Arr::add($validate_array, 'name', 'required');
        $validate_message = Arr::add($validate_message, 'name.required', 'Debe proporcionar el nombre!');
        $validate_array = Arr::add($validate_array, 'apellido_paterno', 'required');
        $validate_message = Arr::add($validate_message, 'apellido_paterno.required', 'Debe proporcionar el apellido paterno!');
        $validate_array = Arr::add($validate_array, 'apellido_materno', 'required');
        $validate_message = Arr::add($validate_message, 'apellido_materno.required', 'Debe proporcionar el apellido materno!');
        $validate_array = Arr::add($validate_array, 'fechanacimiento', 'required');
        $validate_message = Arr::add($validate_message, 'fechanacimiento.required', 'Debe proporcionar la fecha de nacimiento!');
        $validate_array = Arr::add($validate_array, 'representacion', 'required');
        $validate_message = Arr::add($validate_message, 'representacion.required', 'Debe proporcionar el tipo de representación!');
        if ($request->get('organizacion')) {
            $validate_array = Arr::add($validate_array, 'organizacion', 'required');
            $validate_message = Arr::add($validate_message, 'organizacion.required', 'Proporcione el nombre de la organización o asociación!');
        }
        $validate_array = Arr::add($validate_array, 'temaPropuesta', 'required');
        $validate_message = Arr::add($validate_message, 'temaPropuesta.required', 'Debe seleccionar un tema!');
        $validate_array = Arr::add($validate_array, 'tipoPropuesta', 'required');
        $validate_message = Arr::add($validate_message, 'tipoPropuesta.required', 'Debe seleccionar el tipo de propuesta!');
        if ($request->get('escrito')) {
            $validate_array = Arr::add($validate_array, 'escrito', 'required');
            $validate_message = Arr::add($validate_message, 'escrito.required', 'Detalle su propuesta!');
        }
        if ($request->get('archivo')) {
            $validate_array = Arr::add($validate_array, 'archivo', 'required');
            $validate_message = Arr::add($validate_message, 'archivo.required', 'Debe proporcionar el archivo de su propuesta!');
        }
        if ($request->get('video')) {
            $validate_array = Arr::add($validate_array, 'video', 'required');
            $validate_message = Arr::add($validate_message, 'video.required', 'Debe proporcionar el video de su propuesta!');
        }
        $validate_array = Arr::add($validate_array, 'chkAviso','required');
        $validate_message = Arr::add($validate_message, 'chkAviso.required', 'Debe leer y aceptar el Aviso de Provacidad!');


        $this->validate($request, $validate_array, $validate_message);


        //comienza guardado

        $idRegistro = 'OPB-CON-DIS-0001';
        return Redirect::back()->with('scssmsg', 'Se ha guardado correctamente el registro. Su número de Folio es: ' . $idRegistro);
    }

    public function logout(Request $request)
    {

        //Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
