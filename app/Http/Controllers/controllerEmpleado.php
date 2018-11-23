<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\empleado;

class controllerEmpleado extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function vistaEmpleados(){
    	return view('agregarEmpleados');
    }


    public function index(){

        $empleado = empleado::orderBy('id','ASC')->paginate(8);
    	return view('empleado')->with('empleado',$empleado);
    }

    public function store(Request $request){
//				echo"holii";


        $empleado =new libros($request->all());
        $empleado->nombre=$request->nombre;
        $empleado->edad=$request->edad;
        $empleado->cedula=$request->cedula;
        $empleado->fecha=$request->fecha;

        $empleado->save();


        index();

		}

		public function update(Request $request, $id){

			$empleado =new libros($request->all());
			$empleado->nombre=$request->nombre;
			$empleado->edad=$request->edad;
			$empleado->cedula=$request->cedula;
			$empleado->fecha=$request->fecha;

			$empleado->save();
		}

		public function edit($id){

			$empleado=empleado::find($id);
			return view(empleado)->with("empleado",$empleado);
		}

}
