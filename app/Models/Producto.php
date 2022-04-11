<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $catalogo_id
 * @property $fecha_ingreso
 * @property $fecha_salida
 * @property $marca
 * @property $presentacion
 * @property $lote
 * @property $fecha_vencimiento
 * @property $resp_ingreso
 * @property $resp_salida
 * @property $precio_sin_igv
 * @property $area
 * @property $cant_entrada
 * @property $cant_salida
 * @property $saldo
 * @property $created_at
 * @property $updated_at
 *
 * @property Catalogo $catalogo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

    static $rules = [
		'catalogo_id' => 'required',
		'fecha_ingreso' => 'required',
		'fecha_salida' => 'required',
		'marca' => 'required',
		'presentacion' => 'required',
		'lote' => 'required',
		'fecha_vencimiento' => 'required',
		'resp_ingreso' => 'required',
		'resp_salida' => 'required',
		'precio_sin_igv' => 'required',
		'area' => 'required',
		'cant_entrada' => 'required',
		'cant_salida' => 'required',
		// 'saldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['catalogo_id','fecha_ingreso','fecha_salida','marca','presentacion','lote','fecha_vencimiento','resp_ingreso','resp_salida','precio_sin_igv','area','cant_entrada','cant_salida','saldo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function catalogo()
    {
        return $this->hasOne('App\Models\Catalogo', 'id', 'catalogo_id');
    }




}
