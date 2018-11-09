<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class OrmController extends Controller
{
  public function insert(Request $request){
      $nombre = $request->input('nombre');
      $email = $request->input('email');
      $texto = $request->input('asunto');
      $texto = $request->input('texto');
      $datos = Contacto::create(['nombre' => $nombre, 'email' => $email, 'asunto' => $asunto,'texto' => $texto]);
      return view('/');
  }
}
