<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\FileUpload\InputFile;
class ImagenController extends Controller
{
    public function subirImagen(Request $request) {
        // 1. Cargar y almacenar la imagen
        $imagen = $request->file('file');
        $nombre = time().'.jpg';
        Storage::disk('public')->put($nombre, file_get_contents($imagen));

        // 2. Almacena en la BD (según la migración proporcionada anteriormente)
        DB::table('imagenes')->insert([
            'ruta_imagen' => $nombre
        ]);

        // 3. Enviar mensaje y foto a Telegram
        Telegram::sendMessage([
            'chat_id' => '5719532237',
            'text' => 'Movimiento detectado.'
        ]);

        Telegram::sendPhoto([
            'chat_id' => '5719532237',
            'photo' => InputFile::createFromContents(Storage::disk('public')->get($nombre), $nombre)
        ]);

        return response()->json(['message' => 'Imagen almacenada con éxito y notificación enviada a Telegram.']);
    }

    public function mostrarImagenes() {
        $imagenes = DB::table('imagenes')->orderBy('fecha', 'desc')->get();
        return view('imagenes', ['imagenes' => $imagenes]);
    }

}
