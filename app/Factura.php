<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //Vincular modelo a tabla
    protected $table="invoice";
    //Establecer la clave primaria para la entidad(por defecto: id)
    protected $primaryKey="InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //RELACIÓN M:M ENTRE FACTURA Y CANCIONES
    public function canciones(){
            //relación mm: belongsToMany
            //parametros: 1. Modelo a Relacionar
            //            2. Tabla pivote
            //            3. FK del presente modelo en la tabla pivot
            //            4. FK del modelo relacionado en la tabla pivot
            return $this->belongsToMany('App\Cancion',
                                        'invoiceline',
                                        'InvoiceId',
                                        'TrackId'
                                        );
    }
}
