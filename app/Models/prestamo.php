<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class prestamo extends Model
{
    protected $table = "prestamo";
    protected $fillable = ["id","fecpre","id_lector","id_libro","fecdev"];   
}