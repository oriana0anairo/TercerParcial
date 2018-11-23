<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\libros;

class ControllerLibros extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function vistaLibros(){
    	return view('agregar');
    }


    public function index(){

        $libros = libros::orderBy('id','ASC')->paginate(8);
    	return view('libros')->with('libros',$libros);
    }

    public function store(Request $request){
//				echo"holii";

        $libro=new libros($request->all());
        $libro->nombre=$request->nombre;
        $libro->editorial=$request->editorial;
        $libro->anio=$request->anio;
        $libro->ubicacion=$request->ubicacion;
        $libro->autor=$request->autor;
        $libro->tipo=$request->tipo;
		$libro->area=$request->area;
		$libro->dias=$request->dias;
        $libro->save();
		}

		public function update(Request $request, $id){

			$libro= libros::find($id);
			$libro->nombre=$request->nombre;
			$libro->editorial=$request->editorial;
			$libro->anio=$request->anio;
			$libro->ubicaion=$request->ubicaion;
			$libro->autor=$request->autor;
			$libro->tipo=$request->tipo;
			$libro->area=$request->area;
			$libro->save();
		}

		public function edit($id){

			$libro=libros::find($id);
			return view(libros)->with("libro",$libro);
		}

}
