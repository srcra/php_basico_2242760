<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //Vincular modelo a tabla
    protected $table="playlist";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="PlaylistId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion MM (playlist y canción)
    public function canciones(){
        //método belongsToMany
        //1. Modelo destino
        //2. Tabla pivote (intermedia)
        //3. FK tabla origin
        //4. FK tabla destino
        return $this->belongsToMany('App\Cancion',
                                    'playlisttrack',
                                    'PlaylistId',
                                    'TrackId');
    }
}
