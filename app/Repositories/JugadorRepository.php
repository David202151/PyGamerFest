<?php

namespace App\Repositories;

use App\Models\Jugador;
use App\Repositories\BaseRepository;

/**
 * Class JugadorRepository
 * @package App\Repositories
 * @version December 9, 2022, 3:23 am +07
*/

class JugadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_jug',
        'cedula_jug',
        'telefono_jug',
        'correo_jug',
        'observaciones_jug'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jugador::class;
    }
}
