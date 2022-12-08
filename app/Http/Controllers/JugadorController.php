<?php

namespace App\Http\Controllers;

use App\DataTables\JugadorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJugadorRequest;
use App\Http\Requests\UpdateJugadorRequest;
use App\Repositories\JugadorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JugadorController extends AppBaseController
{
    /** @var  JugadorRepository */
    private $jugadorRepository;

    public function __construct(JugadorRepository $jugadorRepo)
    {
        $this->jugadorRepository = $jugadorRepo;
    }

    /**
     * Display a listing of the Jugador.
     *
     * @param JugadorDataTable $jugadorDataTable
     * @return Response
     */
    public function index(JugadorDataTable $jugadorDataTable)
    {
        return $jugadorDataTable->render('jugadors.index');
    }

    /**
     * Show the form for creating a new Jugador.
     *
     * @return Response
     */
    public function create()
    {
        return view('jugadors.create');
    }

    /**
     * Store a newly created Jugador in storage.
     *
     * @param CreateJugadorRequest $request
     *
     * @return Response
     */
    public function store(CreateJugadorRequest $request)
    {
        $input = $request->all();

        $jugador = $this->jugadorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/jugadors.singular')]));

        return redirect(route('jugadors.index'));
    }

    /**
     * Display the specified Jugador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jugador = $this->jugadorRepository->find($id);

        if (empty($jugador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/jugadors.singular')]));

            return redirect(route('jugadors.index'));
        }

        return view('jugadors.show')->with('jugador', $jugador);
    }

    /**
     * Show the form for editing the specified Jugador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jugador = $this->jugadorRepository->find($id);

        if (empty($jugador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/jugadors.singular')]));

            return redirect(route('jugadors.index'));
        }

        return view('jugadors.edit')->with('jugador', $jugador);
    }

    /**
     * Update the specified Jugador in storage.
     *
     * @param  int              $id
     * @param UpdateJugadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJugadorRequest $request)
    {
        $jugador = $this->jugadorRepository->find($id);

        if (empty($jugador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/jugadors.singular')]));

            return redirect(route('jugadors.index'));
        }

        $jugador = $this->jugadorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/jugadors.singular')]));

        return redirect(route('jugadors.index'));
    }

    /**
     * Remove the specified Jugador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jugador = $this->jugadorRepository->find($id);

        if (empty($jugador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/jugadors.singular')]));

            return redirect(route('jugadors.index'));
        }

        $this->jugadorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/jugadors.singular')]));

        return redirect(route('jugadors.index'));
    }
}
