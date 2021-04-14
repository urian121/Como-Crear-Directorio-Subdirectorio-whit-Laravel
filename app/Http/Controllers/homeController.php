<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/*** Importamos estos Facades ***/
use Illuminate\Support\Facades\File;


class homeController extends Controller
{
    

public function crearDirectorio(){
    return 'holaxx';
}

    public function home(){

    /**Verificando si existe el archivo */
      /*  if(file_exists(public_path('fotos/1.jpg'))){
            dd('Si existe el Archivo');
        }else{
            dd('No existe el Archivo.');
        }
    
        if(File::exists(public_path('fotos/1.jpg'))){
            dd('Si existe el Archivo');
        }else{
            dd('No existe el Archivo');
        }
        */

        
    /**Verificanco si existe el Directorio */

/*  $ruta = public_path('upload/imgs');
    //isDirectory () tomará un argumento como ruta de carpeta y devolverá true si la carpeta existe o false.
    if(!File::isDirectory($ruta)){
    //makeDirectory () tomará cuatro argumentos para crear una carpeta con permiso
    File::makeDirectory($ruta, 0777, true, true);
    }
    dd('done');
*/





/**Crear directorio */
  /*  $path = public_path().'/images';
    File::makeDirectory($path, 0777, true, true);
*/




    return view('home');
}


}