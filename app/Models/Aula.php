<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Aula
 * @package App\Models
 * @version December 9, 2022, 5:25 am +07
 *
 * @property \Illuminate\Database\Eloquent\Collection $eventos
 * @property string $nombre_aul
 * @property string $edificio_aul
 * @property string $direccion_aul
 * @property string $observaciones_aul
 */
class Aula extends Model
{
    use SoftDeletes;


    public $table = 'aulas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_aul',
        'edificio_aul',
        'direccion_aul',
        'observaciones_aul'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_aul' => 'integer',
        'nombre_aul' => 'string',
        'edificio_aul' => 'string',
        'direccion_aul' => 'string',
        'observaciones_aul' => 'string'
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
    public function eventos()
    {
        return $this->hasMany(\App\Models\Eventos::class, 'id_aula', 'id_aul');
    }
}
