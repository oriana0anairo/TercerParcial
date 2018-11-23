<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\estudiantes;

class ControllerEstudiante extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function vistaEstudiante(){
    	return view('agregarEstudiante');
    }


    public function index(){

        $estudiantes = estudiantes::orderBy('id','ASC')->paginate(8);
    	return view('usario')->with('estudiantes',$estudiantes);
    }

    public function store(Request $request){
//				echo"holii";


        $estudiante=new estudiantes($request->all());
        $estudiante->nombre=$request->nombre;
        $estudiante->edad=$request->edad;
        $estudiante ->cedula=$request->cedula;
        $estudiante->carrera=$request->carrera;
        $estudiante->save();


        index();

		}

		public function update(Request $request, $id){

			$estudiante=new estudiantes($request->all());
			$estudiante->nombre=$request->nombre;
			$estudiante->edad=$request->edad;
			$estudiante ->cedula=$request->cedula;
			$estudiante->carrera=$request->carrera;
			$estudiante->save();
		}

		public function edit($id){

			$estudiante=estudiantes::find($id);
			return view(usuario)->with("estudiante",$estudiante);
		}

}
