<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //Vincular modelo a tabla
    protected $table="employee";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="EmployeeId";
    //Omitir campos de auditoria
    public $timestamps = false;
}
