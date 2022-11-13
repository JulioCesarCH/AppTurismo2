<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioturisticoController extends Controller
{
    public function alojamiento(){
    return view("alojamiento");
    }  

    public function restaurante(){
    return view("restaurante");
    }  

    public function transporte(){
    return view("transporte");
    }  

    public function clinicas(){
    return view("clinicas");
    } 
}
