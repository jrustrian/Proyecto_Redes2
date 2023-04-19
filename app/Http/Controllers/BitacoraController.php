<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Imagen;


class BitacoraController extends Controller
{
    public function index(){
        return view('bitacora.index');
    }
}