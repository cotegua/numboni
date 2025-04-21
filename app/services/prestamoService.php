<?php
namespace App\services;

//use App\Models\libro;
//use App\Models\Orden;
use App\Models\prestamo;
use Illuminate\Http\Request;
use App\Traits\Loggable;

class PrestamoService
{
     public function Mostrar_prestamos()
     {
        $prestamo = prestamo::get();
        return $prestamo;
     }
    public function Buscar_Prestamo($id)
    {
        $prestamo = prestamo::firstWhere("id",$id);
        return $prestamo;
    }
    public function Insertar_Prestamo(Request $request)
    {
        
      $params = $request -> all();
       $request = prestamo:: created($params);
        
    }

    public function Actualizar_Prestamo($prestamo,$data)
    {
         
        $prestamo->update($data);
       // $this->log("Libro actualizado: {$libro->id}");

        return $prestamo;
    }
    
     public function Eliminar_Prestamo(prestamo $prestamo)
     {       

        return $prestamo->delete();
     }
}





