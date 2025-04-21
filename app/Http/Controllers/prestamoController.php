<?php
namespace App\Http\Controllers;
use App\services\PrestamoService;
use Illuminate\Http\Request;
class prestamoController extends Controller
{
    protected $prestamo_service;
    public function main(PrestamoService $prestamoService)
    {
        $this->prestamo_service = $prestamoService;
    }
    public function index()
    {
        $prestamo =$this->prestamo_service-> Mostrar_prestamo();
        return response()->json($prestamo);
    }
    public function buscar_prestamo($id)
    {
        $prestamo =$this->prestamo_service->Buscar_Prestamo($id);
        return response()->json($prestamo);
    }
    public function crear_prestamo(Request $request )
    {
        $prestamo =$this->prestamo_service->insertar_Prestamo($request);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        return response()->json($prestamo);
    }
    public function Update_prestamo($prestamo,$data)
    {
        $prestamo =$this->prestamo_service->Actualizar_Prestamo($prestamo,$data);
        return response()->json($prestamo);
    }
}