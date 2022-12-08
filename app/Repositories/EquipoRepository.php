<?php

namespace App\Repositories;

use App\Models\Equipo;
use App\Repositories\BaseRepository;

/**
 * Class EquipoRepository
 * @package App\Repositories
 * @version December 9, 2022, 3:30 am +07
*/

class EquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_equi',
        'observaciones_equi'
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
        return Equipo::class;
    }
}
