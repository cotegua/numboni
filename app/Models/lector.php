<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class lector extends Model
{
    protected $table = "lector";
    protected $fillable = ["idlector","nombre","fecinc","fono","direccion","idlector"];
}