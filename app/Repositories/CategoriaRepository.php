<?php

namespace App\Repositories;

use App\Models\Categoria;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories
 * @version December 9, 2022, 5:09 am +07
*/

class CategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_cat',
        'numero_jugadores_cat',
        'competencia_cat',
        'descripcion_cat'
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
        return Categoria::class;
    }
}
