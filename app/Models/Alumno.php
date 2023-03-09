<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];

    /*el atributo fillable son los parametros que permito que se introduzcan al instanciar una clase*/
    protected $fillable=['nombre','apellido','email'];
}
