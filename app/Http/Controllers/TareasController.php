<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarea;
use Exception;

class TareasController extends Controller
{
    public function get(){
        if(Tarea::all()->isEmpty()){
            return ['No se encontraron tareas'];
        } else {
            $tareas = Tarea::all();
            return $tareas;
        }
    }

    public function store(Request $request){
        try{
            $tarea = new Tarea();
            $tarea->nombre = $request->nombre;
            $tarea->descripcion = $request->descripcion;
            $tarea->curso = $request->curso;
            $tarea->fecha_entrega = $request->fecha_entrega;
            $tarea->estado = $request->estado;
            $tarea->save();
            return ['Se ha guardado una nueva tarea'];
        } catch(Exception $e){
            return ['Se ha producido un error al guardar la tarea', $e];
        }
    }

    public function update(Request $request){
        try{
            $tarea = Tarea::findOrFail($request->id);
            $tarea->nombre = $request->nombre;
            $tarea->descripcion = $request->descripcion;
            $tarea->curso = $request->curso;
            $tarea->fecha_entrega = $request->fecha_entrega;
            $tarea->estado = $request->estado;
            $tarea->save();
            return ['Se ha actualizado la tarea'];
        } catch(Exception $e){
            return ['Se ha producido un error al actualizar la tarea'];
        }
    }

    public function delete(Request $request){
        try{
            $tarea = Tarea::findOrFail($request->id);
            $tarea->delete();
            return ['Se ha eliminado la tarea'];
        } catch(Exception $e){
            return ['Se ha producido un error al eliminar la tarea'];
        }
    }

    public function show(Request $request){
        $tarea = Tarea::findOrFail($request->id);
        if($tarea){
            return $tarea;
        } else {
            return ['No se encontraron datos'];
        }
    }

    public function state(Request $request){
        try{
            $tarea = Tarea::findOrFail($request->id);
            $tarea->estado = $request->estado;
            $tarea->save();
            return ['Se ha cambiado el estado de la tarea'];
        } catch(Exception $e){
            return ['Se ha producido un error al cambiar el estado de la tarea'];
        }
    }
}
