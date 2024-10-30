<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvaController extends Controller
{
public function prova(){
    $numeri = 5 +5;
    return $numeri;
}

public function gestioneDati(Request $request){
    return "dati ricevuti".$request->input('data');   
}
}

