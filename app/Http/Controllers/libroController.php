<?php
namespace App\Http\Controllers;
use App\services\libroService;
use Illuminate\Http\Request;
class libroController extends Controller
{
    protected $libro_service;
    public function main(libroService $libroService)
    {
        $this->libro_service = $libroService;
    }
    public function index()
    {
        $libro =$this->libro_service-> Mostrar_libros();
        return response()->json($libro);
    }
    public function buscar_libro($id)
    {
        $libro =$this->libro_service->buscar_libro($id);
        return response()->json($libro);
    }
    public function crear_libro(Request $request )
    {
        $libro =$this->libro_service->insertar_libro($request);
        return response()->json($libro);
    }
    public function Update_libro($libro,$data)
    {
        $libro =$this->libro_service->Actualizar_libro($libro,$data);
        return response()->json($libro);
    }
}