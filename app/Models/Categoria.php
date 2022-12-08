<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Categoria
 * @package App\Models
 * @version December 9, 2022, 5:09 am +07
 *
 * @property \App\Models\Videojuego $idCategoria
 * @property string $tipo_cat
 * @property integer $numero_jugadores_cat
 * @property string $competencia_cat
 * @property string $descripcion_cat
 */
class Categoria extends Model
{
    use SoftDeletes;


    public $table = 'categorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipo_cat',
        'numero_jugadores_cat',
        'competencia_cat',
        'descripcion_cat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cat' => 'integer',
        'tipo_cat' => 'string',
        'numero_jugadores_cat' => 'integer',
        'competencia_cat' => 'string',
        'descripcion_cat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCategoria()
    {
        return $this->belongsTo(\App\Models\Videojuego::class, 'id_categoria', 'id_cat');
    }
}
