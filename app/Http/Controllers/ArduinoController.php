<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alert; // Reemplaza 'Dato' por el nombre de tu modelo

class ArduinoController extends Controller
{
    public function recibirDatos(Request $request)
    {
        // Obtén los datos enviados desde el Arduino
        $datos = $request->all();

        // Guarda los datos en la base de datos
        Alert::create($datos);

        // Devuelve una respuesta exitosa al Arduino
        return response()->json(['message' => 'Datos recibidos y guardados correctamente']);
    }
}
