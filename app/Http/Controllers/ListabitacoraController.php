<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Imagen;

class ListabitacoraController extends Controller
{
    public function listar()
    {
        $bitacora = \App\Models\bitacora::all();
        return view('bitacora.index')->with('bitacora', $bitacora);
    }
    //public function listar(){
    //    $bitacora = \App\Models\bitacora::all();
    //    return view('bitacora.index', ['bitacora' => $bitacora]);
    //}
    //public function listar(){
    //    $data['bitacora']= \App\Models\bitacora::paginate(3);
    //    return view('bitacora.index', $data);
    //}
    public function search(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $data = YourModel::whereBetween('created_at', [$start_date, $end_date])->get();
        return view('bitacora.index', compact('data'));
    }
    public function store(Request $request)
    {
        // ... lógica de creación ...

        return redirect()->back()->with('status', 'El registro ha sido creado correctamente.');
    }

    public function update(Request $request, $id)
    {
        // ... lógica de actualización ...

        return redirect()->back()->with('status', 'El registro ha sido actualizado correctamente.');
    }

}