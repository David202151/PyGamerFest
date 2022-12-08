<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Equipo
 * @package App\Models
 * @version December 9, 2022, 3:30 am +07
 *
 * @property \Illuminate\Database\Eloquent\Collection $inscripciónEquipos
 * @property string $nombre_equi
 * @property string $observaciones_equi
 */
class Equipo extends Model
{
    use SoftDeletes;


    public $table = 'equipos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_equi',
        'observaciones_equi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_equi' => 'integer',
        'nombre_equi' => 'string',
        'observaciones_equi' => 'string'
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
    public function inscripciónEquipos()
    {
        return $this->hasMany(\App\Models\Inscripción_Equipo::class, 'id_equipo', 'id_equi');
    }
}
