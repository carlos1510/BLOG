<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina Curso";
    }

    public function create(){
        return "En esta pagina podras crear un curso";
    }

    public function show($curso){
        return "Bienvido al curso: $curso";
    }
}
