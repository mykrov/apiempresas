<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $ip_server
 * @property string $imagen
 * @property boolean $activo
 * @property string $puerto
 * @property string $facturas
 * @property string $pedidos
 * @property string $cobros
 * @property string $ubicacionMapa
 * @property string $ubicacionCli
 * @property string $RUC
 */
class Empresa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empresa';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'ip_server', 'imagen', 'activo', 'puerto','facturas','pedidos','cobros','ubicacionMapa','ubicacionCli','RUC'];

}
