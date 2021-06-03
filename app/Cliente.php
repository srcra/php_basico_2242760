<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Vincular modelo a tabla
    protected $table="customer";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="CustomerId";
    //Omitir campos de auditoria
    public $timestamps = false;
}
