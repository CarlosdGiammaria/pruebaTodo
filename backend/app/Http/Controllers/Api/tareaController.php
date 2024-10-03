<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\Validator;

class tareaController extends Controller
{
    // obetner todas las tareas existentes
    
    public function index() {
        $tareas = Tarea::all();
        return response()->json($tareas, 200);
    }
    

    // duncion para crear tareas
    public function store (Request $request){

       $validator = Validator::make($request->all(),[
        
            'title' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){

            $data = [
                'message' => 'Error en la validación de los datos',
                'error' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $tarea  = Tarea::create([
            'title' => $request -> title,
            'description' => $request -> description
        ]);

        if(!$tarea){

            $data = [
                'message' => 'Error al crear la tarea',
                'status' => 500
            ];
            return response()->json($data,500);
        }

        $data = [
            'tarea' => $tarea,
            'status' => 201
        ];

        return response()->json($data,201);
    }

    // obetner una tareas en especifico

    public function show($id){

        $tarea = Tarea::find($id);
        
        if(!$tarea){
            $data = [
                'message' => 'Tarea no encontrada',
                'status' => 404
            ];
            return response()->json($data,404);
        }
        $data  = [
            'tarea' => $tarea,
            'status' => 200
        ];
        return response()->json($data,200);
    }

    // eliminar una tarea en especifico

    public function destroy($id){

        $tarea = Tarea::find($id);

        if(!$tarea){
            $data = [
                'message' => 'Tarea no encontrada',
                'status' => 404
            ];
            return response()->json($data,404);
        }

        $tarea->delete();

        $data = [
            'message' =>  'Tarea eliminada',
            'status' => 200
        ];
        return  response()->json($data,200);
    }

    // Actualizar una tarea en especifico
    public function update(Request $request, $id){

        $tarea = Tarea::find($id);

        if(!$tarea){
            $data=[
                'message'=>'Tarea no encontrada',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required'
        ]);

        if($validator->fails()){

            $data = [
                'message' => 'Error en la validación de los datos',
                'error' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);

        }

        $tarea->title = $request->title;
        $tarea->description = $request->description;

        $tarea->save();

        $data = [
            'message' => 'Tarea actualizada',
            'tarea'=> $tarea,
            'status'=> 200
        ];
        return response()->json($data, 200);
    }
}
