<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    public function index()
    {
        $datos['autos'] = Autos::all();
        return view('Autos', $datos);
    }

    public function create()
    {
        return view('create');
    }
        
    public function store(Request $request){
        // Obtener los datos del formulario
        $datosAuto = $request->except('_token');
        Autos::insert($datosAuto);
        return redirect('autos');
    }


    // Editar un registro
    public function edit($id)
    {
        $autos = Autos::findOrFail($id);
        return view('edit', compact('autos'));
    }

    // Actualizar un registro
    public function update(Request $request, $id){
        $datosAuto = request()->except(['_token','_method']);
        Autos::where('id','=',$id)->update($datosAuto);

        $autos = Autos::findOrFail($id);
        return view('edit', compact('autos'));
    }

    // Eliminar un registro
    public function destroy($id)
    {
        autos::destroy($id);
        return redirect('autos');
    }
}
