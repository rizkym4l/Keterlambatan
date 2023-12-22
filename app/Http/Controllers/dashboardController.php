<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lates;
use App\Models\Rayons;
use App\Models\Rombels;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){

        // return date("Y-m-d");
        $students = Students::count();
        $rombels = Rombels::count();
        $userAdmin = User::where('role','=','admin')->count();
        $userPs = User::where('role','=','ps')->count();
        $rayons = Rayons::get();
        if(Auth::user()->role != 'admin'){

            $ps = Rayons::select('id')->where('user_id', '=', Auth::user()->id)->get();
            $siswaperrayon = Students::wherein('rayon_id', $ps)->get();
            // $telatrayon = Lates::where('rayon_id',$siswaperrayon->rayon_id)->get();
            // return $siswaperrayon;
            // return $telatrayon;
            foreach ($siswaperrayon as $sp) {
                // return $sp;
                $siswa = Lates::with('users')->get();
                foreach ($siswa as $sp) {
                    $siswartelat = Lates::with('users')->where('id', '=', $sp['users']['id'])->groupBy('id')->get('id');
                }
    
            }
            $siswartelat->where('date_time_late','like','%' . date("Y-m-d") . '%');
            // return $siswartelat;

        }    





        // return view('terlambat.ps.rekap', ['terlambat' => $siswartelat]);

        // $students->count();

        if (Auth::user()->role != 'admin') {
            return view('dashboard', [
                'students' => $students,
                'userPs' => $userPs,
                'rayons' => $rayons,
                'userAdmin' => $userAdmin,
                'rombels' => $rombels,
                'siswartelat' => $siswartelat,
                'siswaperrayon' => $siswaperrayon
            ]);
        } else {
            return view('dashboard', [
                'students' => $students,
                'userPs' => $userPs,
                'rayons' => $rayons,
                'userAdmin' => $userAdmin,
                'rombels' => $rombels
            ]);
        }
        
    }
}
