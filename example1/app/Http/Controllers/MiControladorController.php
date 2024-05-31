<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControladorController extends Controller
{
    //
    public function goToPage2(){
        return view('mis_vistas.second_view');
 
    }

    public function saludar(Request $request){
        
        if (empty($request->name)) {
            return back()->with('error', 'El nombre es requerido');
        }
        
        $nombre = $request->name;
        return back()->with('success', $nombre .' mucho gusto!');
    }

    public function suma(Request $request){
        if(empty($request->num1) || empty($request->num2)){
            return back()->with('error', 'Ambos números son requeridos');
        }
        
        $num1 = $request->num1;
        $num2 = $request->num2;
        $resultado = $num1 + $num2;
        return back()->with('success', 'El resultado de la suma es: '. $resultado);
    }
}