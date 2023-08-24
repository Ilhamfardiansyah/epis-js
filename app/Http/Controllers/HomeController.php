<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\T_Aplikasi;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(DataPegawai $dataPegawai, T_Aplikasi $aplikasi)
    {
        $user               = User::count();
        $aplikasi           = T_Aplikasi::all();
        $data               = DataPegawai::count();

        // kapten
        $jabatanKapten      = '%kapten%';
        $kapten             = DataPegawai::where('Pangkat', 'LIKE', $jabatanKapten)->count();
        // kopda
        $jabatanKopda       = '%kopda%';
        $kopda              = DataPegawai::where('Pangkat', 'LIKE', $jabatanKopda)->count();
        // kopka
        $jabatanKopka       = '%kopka%';
        $kopka              = DataPegawai::where('Pangkat', 'LIKE', $jabatanKopka)->count();
        // koptu
        $jabatanKoptu       = '%koptu%';
        $koptu              = DataPegawai::where('Pangkat', 'LIKE', $jabatanKoptu)->count();
        // letkol
        $jabatanLetkolPnb   = '%letkol%';
        $letkol             = DataPegawai::where('Pangkat', 'LIKE', $jabatanLetkolPnb)->count();
        // letda
        $jabatanLetda       = '%letda%';
        $letda              = DataPegawai::where('Pangkat', 'LIKE', $jabatanLetda)->count();
        // lettu
        $jabatanLettu       = '%lettu%';
        $lettu              = DataPegawai::where('Pangkat', 'LIKE', $jabatanLettu)->count();
        // mayor
        $jabatanMayor       = '%mayor%';
        $mayor              = DataPegawai::where('Pangkat', 'LIKE', $jabatanMayor)->count();
        // pelda
        $jabatanPelda       = '%pelda%';
        $pelda              = DataPegawai::where('Pangkat', 'LIKE', $jabatanPelda)->count();
        // peltu
        $jabatanPeltu       = '%peltu%';
        $peltu              = DataPegawai::where('Pangkat', 'LIKE', $jabatanPeltu)->count();
        // penata muda
        $jabatanPenataMuda  = '%penata muda%';
        $penataMuda         = DataPegawai::where('Pangkat', 'LIKE', $jabatanPenataMuda)->count();
        // pengatur
        $jabatanPengatur    = '%pengatur%';
        $pengatur           = DataPegawai::where('Pangkat', 'LIKE', $jabatanPengatur)->count();
        // pns
        $jabatanPns         = '%pns%';
        $pns                = DataPegawai::where('Pangkat', 'LIKE', $jabatanPns)->count();
        // prada
        $jabatanPrada       = '%prada%';
        $prada              = DataPegawai::where('Pangkat', 'LIKE', $jabatanPrada)->count();
        // praka
        $jabatanPraka       = '%praka%';
        $praka              = DataPegawai::where('Pangkat', 'LIKE', $jabatanPraka)->count();
        // pratu
        $jabatanPratu       = '%pratu%';
        $pratu              = DataPegawai::where('Pangkat', 'LIKE', $jabatanPratu)->count();
        // serda
        $jabatanSerda       = '%serda%';
        $serda              = DataPegawai::where('Pangkat', 'LIKE', $jabatanSerda)->count();
        // serka
        $jabatanSerka       = '%serka%';
        $serka              = DataPegawai::where('Pangkat', 'LIKE', $jabatanSerka)->count();
        // serma
        $jabatanSerma       = '%serma%';
        $serma              = DataPegawai::where('Pangkat', 'LIKE', $jabatanSerma)->count();
        // sertu
        $jabatanSertu       = '%sertu%';
        $sertu              = DataPegawai::where('Pangkat', 'LIKE', $jabatanSertu)->count();



        return view('home' , compact('user', 'data', 'dataPegawai', 'aplikasi', 'kapten', 'kopda', 'kopka',
        'koptu', 'letkol', 'letda', 'lettu', 'mayor', 'pelda', 'peltu', 'penataMuda', 'pengatur', 'pns',
        'prada', 'praka', 'pratu', 'serda', 'serka', 'serma', 'sertu'));
    }
}
