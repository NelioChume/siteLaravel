<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller {
    public function index(){
        
    $nome = "Chume";
    $idade = 23;

    $arr = [12,4,33,42,52,61];
    $nomes = ["Kelven", "Ibra", "Izlatao"];
    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
