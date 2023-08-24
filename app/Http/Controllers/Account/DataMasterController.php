<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use App\Models\Siyalem;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataMasterController extends Controller
{
    public function index()
    {
        $user = Siyalem::count();
        $data = DataPegawai::count();
        return view('Account/DataMaster/Index', compact('user', 'data'));
    }
}
