<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    //
    
    public function index(){
        $data = [
            'renderBody' => view('Inicio.inicio')
        ];

        return view('shared/Layout', $data);
    } 

}
