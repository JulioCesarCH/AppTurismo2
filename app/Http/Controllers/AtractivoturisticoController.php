<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\atractivoturistico;
use Illuminate\Support\Str;

class AtractivoturisticoController extends Controller
{

    public function index(){
        return view("atractivoTuristico");
    
  }  

  public function indexp(){
    $resultados=DB::table('atractivoturisticos')->get();

   return view("atractivoturisticopanel")
    ->with("resultados",$resultados);

}  

public function guardar(Request $request){
        
    //dd($request);
    $atractivo = new atractivoturistico();
    $atractivo->fecha_entrega=$request->input("nombre");
    $atractivo->direccion_entrega=$request->input("descripcion");
    $atractivo->dist_entrega=$request->input("ubicacion");
if($request->hasfile("imagen")){
    $imagen=$request->file("imagen");   
    $nombreimagen=Str::slug($request->nombre).".".$imagen->guessExtension();
    $ruta=public_path("img/atractivos/");
    $imagen->move($ruta,$nombreimagen);
    $atractivo->imagen=$nombreimagen;
}
    $atractivo->save();
    
     return redirect('/atractivoturisticop');

 }

}
