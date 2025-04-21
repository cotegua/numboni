<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class libro extends Model
{
    protected $table = "libro";
    protected $fillable = ["id","nombre","codigo","autor"];
    
}