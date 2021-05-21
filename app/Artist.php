<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //Vincular modelo a tabla
    protected $table="artist";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="ArtistId";
    //Omitir campos de auditoria
    public $timestamps = false;

}
