<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rayons;
use App\Models\Rombels;
use App\Models\Students;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $students = Students::count();
        $rombels = Rombels::count();
        $userAdmin = User::where('role','=','admin')->count();
        $userPs = User::where('role','=','ps')->count();
        $rayons = Rayons::count();

        // $students->count();

        return view('dashboard',['students' => $students, 'userPs' => $userPs, 'rayons' => $rayons, 'userAdmin' => $userAdmin,'rombels' => $rombels]);
    }
}
