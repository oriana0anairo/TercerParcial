<?php

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


Route::get("/libros","controllerLibros@index")->name("vista.libro");
Route::get("/agregar","controllerLibros@vistaLibros")->name("vista.edit");
Route::post("/libros","controllerLibros@store")->name("agregar");
Route::get("/libros/edit","controllerLibros@edit")->name("editarLibro");
Route::put("/libros/actualizar","controllerLibros@update")->name("libors.put");


Route::get("/estudiante","controllerEstudiante@index")->name("vista.estudiante");
Route::get("/agregarEstudiante","controllerLibros@vistaEstudiante")->name("estudiante.edit");
Route::post("/estudiante","controllerEstudiante@store")->name("agregar.estudiante");
Route::get("/estudiante/edit","controllerEstudiante@edit")->name("editarEstudiante");
Route::put("/Estudiante/actualizar","controllerEstudiante@update")->name("estudiante.put");


Route::get("/empleado","controllerEmpleado@index")->name("vista.empleado");
Route::get("/agregarEmpleado","controllerEmpleado@vistaEmpleado")->name("empleado.edit");
Route::post("/empleado","controllerEmpleado@store")->name("agregar.empleado");
Route::get("/empleado/edit","controllerEmpleado@edit")->name("editarEmpleado");
Route::put("/empleado/actualizar","controllerEmpleado@update")->name("empleado.put");
