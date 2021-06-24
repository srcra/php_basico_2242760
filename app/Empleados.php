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

    //relacion 1 - M Cliente
    public function clientes(){
        return $this->hasMany('App\Cliente' , 'SupportRepId');
    }

    //relacion 1 - M Facturas (a través del cliente)
    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Cliente',
                                     'SupportRepId',//FK del abuelo en el papá
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId'
                                    );
    }
}

