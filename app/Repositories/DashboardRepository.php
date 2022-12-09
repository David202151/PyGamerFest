<?php

namespace App\Repositories;

use App\Models\Attendance;
use Carbon\Carbon;

/**
 * Class DashboardRepository
 * @package App\Repositories
 * @version July 26, 2021, 12:17 pm UTC
 */

class DashboardRepository
{
    /** @var  UserRepository */
    private $userRepository;
    /** @var  RoleRepository */
    private $roleRepository;
    /** @var  PermissionRepository */
    private $permissionRepository;
    /** @var  AttendanceRepository */
    private $attendanceRepository;
<<<<<<< HEAD
     /** @var  JugadoresRepository */
    private $jugadoresRepository;
      /** @var  EquipoRepository */
    private $equipoRepository;
    


=======
    /** @var  categoriasRepository */
    private $categoriasRepository;
    /** @var  aulasRepository */
    private $aulasRepository;
>>>>>>> af114cd6151945f319fff90118437485fc5b040b
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct(RoleRepository $roleRepo, UserRepository $userRepo, PermissionRepository $permissionRepo, AttendanceRepository $attendanceRepo,JugadorRepository $jugadoresRepo, EquipoRepository $equipoRepo )
=======
    public function __construct(RoleRepository $roleRepo, UserRepository $userRepo, PermissionRepository $permissionRepo, AttendanceRepository $attendanceRepo,
           CategoriaRepository $categoriasRepo, AulaRepository $aulasRepo )
>>>>>>> af114cd6151945f319fff90118437485fc5b040b
    {
        $this->permissionRepository = $permissionRepo;
        $this->userRepository = $userRepo;
        $this->roleRepository = $roleRepo;
        $this->attendanceRepository = $attendanceRepo;
<<<<<<< HEAD
        $this->jugadoresRepository = $jugadoresRepo;
        $this->equipoRepository = $equipoRepo;
=======
        $this->categoriasRepository = $categoriasRepo;
        $this->aulasRepository= $aulasRepo;
>>>>>>> af114cd6151945f319fff90118437485fc5b040b
    }

    private function getDashboardInfo()
    {
        $dashboardInfo = [];
        $dashboardInfo['user_count'] =  $this->userRepository->count();
        $dashboardInfo['role_count'] =  $this->roleRepository->count();
        $dashboardInfo['permission_count'] =  $this->permissionRepository->count();
        $dashboardInfo['user_online'] =  $this->attendanceRepository->CountUserOnline();
<<<<<<< HEAD
        $dashboardInfo['jugadores_count'] =  $this->jugadoresRepository ->count();
        $dashboardInfo['equipos_count'] =  $this->equipoRepository->count();


=======
        $dashboardInfo['categorias_count'] =  $this->categoriasRepository->count();
        $dashboardInfo['aulas_count'] =  $this->aulasRepository->count();
>>>>>>> af114cd6151945f319fff90118437485fc5b040b
        
        return $dashboardInfo;
    }
    private function getChartUserCheckinInfo()
    {
        $labels = [];
        $dataset1 = [];
        $dataset1['label'] = 'My Daily';
        $dataset1['data'] = [];
        $dataset1['borderColor'] = 'rgb(75, 192, 192)';

        $data = $this->attendanceRepository->TotalCheckInByDay(auth()->user()->id);
        foreach ($data as $key => $value) {
            $dataset1['data'][$key] = $value;
            $labels[$key] = $key;
        }

        $dataset2 = [];
        $dataset2['label'] = 'User Daily';
        $dataset2['data'] = [];
        $dataset2['borderColor'] = 'rgb(20, 150, 192)';

        $data = $this->attendanceRepository->TotalCheckInByDay();
        foreach ($data as $key => $value) {
            $dataset2['data'][$key ] = $value;
            $labels[$key] = $key;
        }

        $datasets = [];
        $datasets[] = $dataset1;
        $datasets[] = $dataset2;

        $data = [];
        $data['labels'] = array_values($labels);
        $data['datasets'] = $datasets;

        $chart = [];
        $chart['type'] = 'line';
        $chart['data'] = $data;
        return $chart;
    }
    public function GetData()
    {
        $dashboard = [];
        $dashboard['dashboardInfo'] = $this->getDashboardInfo();
        $dashboard['chartUserCheckin'] = $this->getChartUserCheckinInfo();
        return $dashboard;
    }
}
