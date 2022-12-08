<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Jugador
 * @package App\Models
 * @version December 9, 2022, 3:23 am +07
 *
 * @property \Illuminate\Database\Eloquent\Collection $inscripcionEquipos
 * @property string $nombre_jug
 * @property string $cedula_jug
 * @property string $telefono_jug
 * @property string $correo_jug
 * @property string $observaciones_jug
 */
class Jugador extends Model
{
    use SoftDeletes;


    public $table = 'jugadors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_jug',
        'cedula_jug',
        'telefono_jug',
        'correo_jug',
        'observaciones_jug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_jug' => 'integer',
        'nombre_jug' => 'string',
        'cedula_jug' => 'string',
        'telefono_jug' => 'string',
        'correo_jug' => 'string',
        'observaciones_jug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inscripcionEquipos()
    {
        return $this->hasMany(\App\Models\Inscripcion_Equipo::class, 'id_jugador', 'id_jug');
    }
}
