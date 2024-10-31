<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $primaryKey = 'identificacion';
    use HasFactory;

    protected $fillable = ["identificacion","nombres","apellidos","direccion","salario", "fecha", "edad", "cobroSalario"];

} 

