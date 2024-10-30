<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sofat;
use Exception;

abstract class Controller
{
    {
        public function show(){
            return Sofa::all();
        }
        public function delete($id){
            Sofa::destroy($id);
            return response()->json(["message"=>"eliminacion existosa"]);
        }
        public function edit(Request $request, $id)
        {         
            $validator = Validator::make($request->all(), [             
            'material' => 'required|max:8',
            'dimensiones' => 'required',             
            'capacidad' => 'required',
            'color' => 'required',  

        ]);         
        $sofa = Sofa::find($id);             
        $sofa->material = $request->material;             
        $sofa->dimensiones = $request->dimensiones;            
         $sofa->capacida = $request->capacidad;
         $sofa->color = $request->color;

         $sofa->save();                   
         return response()->json(["message" => "Actualización exitosa"]);           
           }
        public function store(Request $request){
            $validator =Validator::make($request->all(),[
         'material' => 'required|max:8',
            'dimensiones' => 'required',             
            'capacidad' => 'required',
            'color' => 'required',  
            ]);
            if($validator ->fails())
            {
                return response()->json(["message"=>"error"]);
            }
            try{
                $sofa =new Sofa;
                $sofa->material = $request->material;             
               $sofa->dimensiones = $request->dimensiones;            
               $sofa->capacida = $request->capacidad;
                 $sofa->color = $request->color;
                $sofa->save();
                return response()->json(["menssage"=>"registro existoso"]);
    
            }
            catch(Exception $e)
            {
                return response()->json(["menssege"=>"error al crear"]);
            }
           
        }
     }  
}
