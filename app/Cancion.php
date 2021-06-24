<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    //Vincular modelo a tabla
    protected $table="track";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="TrackId";
    //Omitir campos de auditoria
    public $timestamps = false;
}
