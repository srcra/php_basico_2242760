<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //Vincular modelo a tabla
    protected $table="album";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="AlbumId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Inverso de la relación muchos a 1
    public function artista(){
        //belongsTo: relación m a 1
        return $this->belongsTo('App\Artist' , 'ArtistId');
    }
}
