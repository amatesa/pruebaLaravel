<?php

// ----------RUTAS ------------
// Route::get('/',function(){
//   // return ("Hola");
//   //echo "<a href='contacto'>Contacto</a><br>"; //con esta ruta ingreso a contacto por la ruta
//   echo "<a href=".route('contactanos').">Contacto</a><br>"; //Con esta ruta estoy ingresando por el nombre de la ruta
// });
//
// Route::get('contacto', function(){
//   return "Seccion contactos";
// })->name("contactanos"); //Esta es una forma de definir el nombre de la URL
//
// Route::get('contacto', ['as' => 'contactanos', function(){
//   return "Seccion contactos";
// }]); //Esta es otra manera de indicar el nombre de la ruta
//
//
// Route::get('contacto', function(){
//   return "Seccion contactos";
// });
//
// Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
//   return "Saludos $nombre";
// })->where('nombre', "[A-Za-z]+");
//
// Route::get('/', function () {
//     return view('welcome');
// });

// -----------Vistas ------------
Route::get('/', function(){
  return view('home');
})->name('home');
Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
  //return view('saludo', ['nombre' => $nombre]); //Para poder pasar un parametro a la vista lo tengo que pasar como un array
  // return view('saludo')->with(['nombre' => $nombre]); --- esta es una alternativa
  $html = "<h2>Contenido html pasado por route y recibido por blade</h2>";  //Ejemplo de como pasar html por blade
  $script = "<script> alert('Esto es un alert de JS') </script>";
  $consolas = ["Play Station 4", "Xbox One", "Wii U"];
  return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
   //compact es una funcion que pasa un array asociativo que tiene que pasar el nombre del parametro, en caso de querer pasar mas variables, las agrego con coma
})->where('nombre', "[A-Za-z]+")->name('saludos');

Route::get('contacto', function(){
  return view('contacto');
})->name('contactos');
