<?php
namespace App\Http\Controllers;
use App\services\LectorService;
use Illuminate\Http\Request;

class lectorController extends Controller
{
    protected $lector_service;
    public function main(LectorService $lectorService)
    {
        $this->lector_service = $lectorService;
    }
    public function index()
    {
        $lector =$this->lector_service-> Mostrar_lectores();
        return response()->json($lector);
    }
    public function buscar_lector($id)
    {
        $lector =$this->lector_service->buscar_lector($id);
        return response()->json($lector);
    }
    public function crear_lector(Request $request )
    {
        $lector =$this->lector_service->insertar_lector($request);
        return response()->json($lector);
    }
    public function Update_lector($lector,$data)
    {
        $lector =$this->lector_service->Actualizar_lector($lector,$data);
        return response()->json($lector);
    }
 
}