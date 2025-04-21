<?php
namespace App\services;

use App\Models\libro;
use App\Models\Orden;
use Illuminate\Http\Request;
use App\Traits\Loggable;
class libroService
{
    public function buscar_libro($id)
    {
        $libro = libro::firstWhere('id',$id);
        return $libro;
    }
     public function insertar_libro(Request $request)
    {
          $params = $request -> all();
          $libro = libro:: created($params);
    }

     
    public function Actualizar_libro($libro,$data)
    {
         
        $libro->update($data);
       // $this->log("Libro actualizado: {$libro->id}");

        return $libro;
    }

     public function Eliminar_libro(libro $libro)
     {
        

        return $libro->delete();
     }

     public function Mostrar_libros()
     {
        $libros = libro::get();
        return $libros;
     }

}