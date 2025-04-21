<?php
namespace App\services;

use App\Models\lector;
use Illuminate\Http\Request;
use App\Traits\Loggable;

class LectorService
{
     public function buscar_lector($id)
    {
        $lector = lector::firstWhere('idlector',$id);
        return $lector;
    }
     public function insertar_lector(Request $request)
    {
          $params = $request -> all();
          $lector = lector:: created($params);
    }
    public function Actualizar_lector($lector,$data)
    {
         
        $lector->update($data);
       // $this->log("Libro actualizado: {$libro->id}");

        return $lector;
    }
     public function Eliminar_lector(lector $lector)
     {       

        return $lector->delete();
     }
      public function Mostrar_lectores()
     {
        $lectores = lector::get();
        return $lectores;
     }

}