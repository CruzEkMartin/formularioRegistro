<?php

namespace App\Http\Controllers\Formulario;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Registro;
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

        $validate_array = Arr::add($validate_array, 'nombre', 'required');
        $validate_message = Arr::add($validate_message, 'nombre.required', 'Debe proporcionar el nombre!');
        $validate_array = Arr::add($validate_array, 'apellido_paterno', 'required');
        $validate_message = Arr::add($validate_message, 'apellido_paterno.required', 'Debe proporcionar el apellido paterno!');
        $validate_array = Arr::add($validate_array, 'apellido_materno', 'required');
        $validate_message = Arr::add($validate_message, 'apellido_materno.required', 'Debe proporcionar el apellido materno!');
        $validate_array = Arr::add($validate_array, 'fechanacimiento', 'required');
        $validate_message = Arr::add($validate_message, 'fechanacimiento.required', 'Debe proporcionar la fecha de nacimiento!');
        if ($request->hasFile('carta')) {
            $validate_array = Arr::add($validate_array, 'carta', 'required');
            $validate_message = Arr::add($validate_message, 'carta.required', 'Debe proporcionar la autorización!');
        }
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
        if ($request->hasFile('documento')) {
            $validate_array = Arr::add($validate_array, 'documento', 'required');
            $validate_message = Arr::add($validate_message, 'documento.required', 'Debe proporcionar el documento de su propuesta!');
        }
        if ($request->hasFile('video')) {
            $validate_array = Arr::add($validate_array, 'video', 'required');
            $validate_message = Arr::add($validate_message, 'video.required', 'Debe proporcionar el video de su propuesta!');
        }
        $validate_array = Arr::add($validate_array, 'chkAviso', 'required');
        $validate_message = Arr::add($validate_message, 'chkAviso.required', 'Debe leer y aceptar el Aviso de Provacidad!');


        $this->validate($request, $validate_array, $validate_message);


        //comienza guardado
        //inicia la transaccion
        try {
            DB::beginTransaction();

            //* Creamos un nuevo registro
            $registro = new Registro();
            $registro->nombre = $request->get('');
            $registro->apellido_paterno = $request->get('');
            $registro->apellido_materno = $request->get('');
            $registro->municipio = $request->get('');
            $registro->modalidad = $request->get('');
            $registro->telefono = $request->get('');
            $registro->email = $request->get('');
            $registro->fechanacimiento = $request->get('');
            $registro->carta = $request->get('');
            $registro->extension_carta = $request->get('');
            $registro->tamanio_carta = $request->get('');
            $registro->representacion = $request->get('');
            $registro->organizacion = $request->get('');
            $registro->discapacidad = $request->get('');
            $registro->temaPropuesta = $request->get('');
            $registro->tipoPropuesta = $request->get('');
            $registro->escrito = $request->get('');
            $registro->documento = $request->get('');
            $registro->extension_documento = $request->get('');
            $registro->tamanio_documento = $request->get('');
            $registro->video = $request->get('');
            $registro->extension_video = $request->get('');
            $registro->tamanio_video = $request->get('');
            $registro->save();

            $idRegistro = $registro::latest('id')->first(); //busca el id del ultimo registro entrada guardado

            //obtenemos y guardamos el folio
            $longitud = 5 - strlen($idRegistro);
            $folio = '';
            for ($i = 0; $i < $longitud; $i++)
                $folio .= 0;
            $folio .= $idRegistro;

            $folio = 'OPB-CON-DIS-' . $folio;

            $registroFolio = Registro::find($idRegistro["id"]);
            $registroFolio->folio =  $folio;
            $registroFolio->save();


            $_Ruta = "../../registros_files/";
            $Adjunto = "";
            $ruta = "";

            $ruta = public_path("$_Ruta/");

            // $nombreArchivo = $this->archivo->getClientOriginalName();
            // $extensionArchivo = $this->archivo->guessExtension();
            // $tamanioArchivo = $this->archivo->getSize();
            // $this->archivo->storeAs('layouts', $nombreArchivo);

            if ($request->hasFile('carta')) {
                $carta = $request->file('carta');
                //$request->file('carta')->storeAs($directorio, $idContacto["id"] . '.' . $extension);
                $cartaName = $folio . '_carta.' . $carta->guessExtension();
                $ruta = $ruta . $cartaName;

                copy($carta, $ruta);
                //actiualizamos la tabla con la ruta
                $registroCarta = Registro::find($idRegistro["id"]);
                $registroCarta->carta =  $cartaName;
                $registroCarta->extension_carta =   $carta->guessExtension();
                $registroCarta->tamanio_carta =  $carta->getSize();
                $registroCarta->save();
            }

            if ($request->hasFile('documento')) {
                $documento = $request->file('documento');
                //$request->file('documento')->storeAs($directorio, $idContacto["id"] . '.' . $extension);
                $documentoName = $folio . '_documento.' . $documento->guessExtension();
                $ruta = $ruta . $documentoName;

                copy($documento, $ruta);
                //actiualizamos la tabla con la ruta
                $registroDocumento = Registro::find($idRegistro["id"]);
                $registroDocumento->documento =  $documentoName;
                $registroDocumento->extension_documento =   $documento->guessExtension();
                $registroDocumento->tamanio_documento =  $documento->getSize();
                $registroDocumento->save();
            }

            if ($request->hasFile('video')) {
                $video = $request->file('video');
                //$request->file('carta')->storeAs($directorio, $idContacto["id"] . '.' . $extension);
                $videoName = $folio . '_video.' . $video->guessExtension();
                $ruta = $ruta . $videoName;

                copy($video, $ruta);
                //actiualizamos la tabla con la ruta
                $registroVideo = Registro::find($idRegistro["id"]);
                $registroVideo->video =  $videoName;
                $registroVideo->extension_video =   $video->guessExtension();
                $registroVideo->tamanio_video =  $video->getSize();
                $registroVideo->save();
            }


            //* si no hay error en la transaccion hacemos commit y redireccionamos correctamente
            DB::commit();

            return Redirect::back()->with('scssmsg', 'Se ha guardado correctamente el registro. Su número de Folio es: ' . $folio);
        } catch (\Exception $e) {
            //! en caso de error hacemos rollback y mandamos mensaje de error
            DB::rollBack();
            return Redirect::back()->with('errormsg', 'Ha ocurrido un error al intentar crear el contacto, intente de nuevo.' . $e);
        }
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
