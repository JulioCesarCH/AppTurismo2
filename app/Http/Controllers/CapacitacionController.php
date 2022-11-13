<?php

namespace App\Http\Controllers;
use App\Models\capacitacion;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CapacitacionController extends Controller
{
    public function index(){
            $resultados=DB::table('actividadcapacitacions')->get();
            $resultados2=DB::table('servicioturisticos')->get();
            $resultados3=DB::table('capacitacions')->get();
    
           return view("capacitacion")
            ->with("resultados",$resultados)
            ->with("resultados2",$resultados2)
            ->with("resultados3",$resultados3);
       
     }  
    
}
