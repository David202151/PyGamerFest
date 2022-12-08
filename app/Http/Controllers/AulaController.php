<?php

namespace App\Http\Controllers;

use App\DataTables\AulaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAulaRequest;
use App\Http\Requests\UpdateAulaRequest;
use App\Repositories\AulaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AulaController extends AppBaseController
{
    /** @var  AulaRepository */
    private $aulaRepository;

    public function __construct(AulaRepository $aulaRepo)
    {
        $this->aulaRepository = $aulaRepo;
    }

    /**
     * Display a listing of the Aula.
     *
     * @param AulaDataTable $aulaDataTable
     * @return Response
     */
    public function index(AulaDataTable $aulaDataTable)
    {
        return $aulaDataTable->render('aulas.index');
    }

    /**
     * Show the form for creating a new Aula.
     *
     * @return Response
     */
    public function create()
    {
        return view('aulas.create');
    }

    /**
     * Store a newly created Aula in storage.
     *
     * @param CreateAulaRequest $request
     *
     * @return Response
     */
    public function store(CreateAulaRequest $request)
    {
        $input = $request->all();

        $aula = $this->aulaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/aulas.singular')]));

        return redirect(route('aulas.index'));
    }

    /**
     * Display the specified Aula.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aula = $this->aulaRepository->find($id);

        if (empty($aula)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aulas.singular')]));

            return redirect(route('aulas.index'));
        }

        return view('aulas.show')->with('aula', $aula);
    }

    /**
     * Show the form for editing the specified Aula.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aula = $this->aulaRepository->find($id);

        if (empty($aula)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aulas.singular')]));

            return redirect(route('aulas.index'));
        }

        return view('aulas.edit')->with('aula', $aula);
    }

    /**
     * Update the specified Aula in storage.
     *
     * @param  int              $id
     * @param UpdateAulaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAulaRequest $request)
    {
        $aula = $this->aulaRepository->find($id);

        if (empty($aula)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aulas.singular')]));

            return redirect(route('aulas.index'));
        }

        $aula = $this->aulaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/aulas.singular')]));

        return redirect(route('aulas.index'));
    }

    /**
     * Remove the specified Aula from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aula = $this->aulaRepository->find($id);

        if (empty($aula)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aulas.singular')]));

            return redirect(route('aulas.index'));
        }

        $this->aulaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/aulas.singular')]));

        return redirect(route('aulas.index'));
    }
}
