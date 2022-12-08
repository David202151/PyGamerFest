<?php

namespace App\Http\Controllers;

use App\DataTables\EquipoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;
use App\Repositories\EquipoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EquipoController extends AppBaseController
{
    /** @var  EquipoRepository */
    private $equipoRepository;

    public function __construct(EquipoRepository $equipoRepo)
    {
        $this->equipoRepository = $equipoRepo;
    }

    /**
     * Display a listing of the Equipo.
     *
     * @param EquipoDataTable $equipoDataTable
     * @return Response
     */
    public function index(EquipoDataTable $equipoDataTable)
    {
        return $equipoDataTable->render('equipos.index');
    }

    /**
     * Show the form for creating a new Equipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created Equipo in storage.
     *
     * @param CreateEquipoRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipoRequest $request)
    {
        $input = $request->all();

        $equipo = $this->equipoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/equipos.singular')]));

        return redirect(route('equipos.index'));
    }

    /**
     * Display the specified Equipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/equipos.singular')]));

            return redirect(route('equipos.index'));
        }

        return view('equipos.show')->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified Equipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/equipos.singular')]));

            return redirect(route('equipos.index'));
        }

        return view('equipos.edit')->with('equipo', $equipo);
    }

    /**
     * Update the specified Equipo in storage.
     *
     * @param  int              $id
     * @param UpdateEquipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEquipoRequest $request)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/equipos.singular')]));

            return redirect(route('equipos.index'));
        }

        $equipo = $this->equipoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/equipos.singular')]));

        return redirect(route('equipos.index'));
    }

    /**
     * Remove the specified Equipo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/equipos.singular')]));

            return redirect(route('equipos.index'));
        }

        $this->equipoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/equipos.singular')]));

        return redirect(route('equipos.index'));
    }
}
