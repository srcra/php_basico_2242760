<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//callback: funcion sin nombre
//Que hace parte de los parametros de la invocación de otra
Route::get("variables", function(){
    //JAVA: Fuertemente tipados
    //PHP, JAVASCRIPT, PYTHON: Debilmente tipados
    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = true;
    var_dump($mensaje);


} );

Route::get("Arreglos", function(){
    //Arreglo: estructura de datos (estructura de codigo para almacenar uno o mas datos)
    $estudiantes = ["AN" =>  "Ana",
                    "MA" =>  "Maria",
                    "JO" =>  "Jorge"
                    ];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});

