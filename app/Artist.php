<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    //Vincular modelo a tabla
    protected $table="artist";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="ArtistId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //definir relación Artist 1 - M albums
    public function discos(){
        //hasmany: parámetros
        //1. Modelo a relacionar
        //2. FK delo módelo papá
        //3. FK del módelo hijo
        return $this->hasMany('App\Disco' ,  'ArtistId' );
    }

    //definir la relacion de multitabla entre
    //artista y sus canciones(tracks)
    public function canciones(){
        //hasManyThrough:
        //1. Modelo nieto
        //2. Modelo papá
        //3. FK del Abuelo en el Papá
        //4. FK del Papá en el nieto
        //5. Clave primaria del abuelo

        return $this->hasManyThrough('App\Cancion',
                                     'App\Disco',
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',
                                     'AlbumId');
    }
}
