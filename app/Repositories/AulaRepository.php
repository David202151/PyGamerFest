<?php

namespace App\Repositories;

use App\Models\Aula;
use App\Repositories\BaseRepository;

/**
 * Class AulaRepository
 * @package App\Repositories
 * @version December 9, 2022, 5:25 am +07
*/

class AulaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_aul',
        'edificio_aul',
        'direccion_aul',
        'observaciones_aul'
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
        return Aula::class;
    }
}
