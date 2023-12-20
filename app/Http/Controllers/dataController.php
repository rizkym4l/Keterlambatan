<?php

namespace App\Http\Controllers;

use App\Models\Rayons;
use App\Models\Rombels;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function index(){
        return view('data');
    }
    public function indexsiswa(){
        $rayon = Rayons::all();
        $rombel = Rombels::all();
        return view('siswa.datasiswa', compact('rayon', 'rombel'));
    }
    public function tambahRayon(){
        $ps = User::where('role','=','ps')->get();
        return view('rayon.tambahrayon', compact('ps'));
    }
    public function createsiswa(Request $request){
     

        $validated = $request->validate([
            "nis" => 'required',
            "name" => 'required',
            "rombel_id" => 'required',
            "rayon_id" => 'required'
        ]);
    
        if($validated){
           Students::create($request->all());
    
           return redirect('datasiswa')->with('msg', 'add new students successfully');
        }
        }

    public function createrayon(Request $request){
     

    $validated = $request->validate([
        "user_id" => 'required',
        "rayon" => 'required'
    ]);

    if($validated){
       Rayons::create($request->all());

       return redirect('tambahRayon')->with('msg', 'add new students successfully');
    }
    }
    public function createrombel(Request $request){
     

    $validated = $request->validate([
        // "id" => 'required',
        "rombel" => 'required'
    ]);

$rombel = Rombels::all();
// $rombel['id'] = '1';
    if($validated){
       Rombels::create($request->all());

       return redirect('tambahrombel')->with('msg', 'add new students successfully');
    }
    }


    public function hapusrombel($id){
        $data = Rombels::findOrFail($id);
        $data->delete();

        if($data){
            return redirect('rombel')->with('msg', 'DELETE BERHASIL');
        }
    }
    public function updaterombel($id,Request $request){
        $validated = $request->validate([
            // "user_id" => 'required',
            "rombel" => 'required'
        ]);
    
$data = Rombels::findOrFail($id);
        $data->update($request->all());

        if($data){
            return redirect('rombel')->with('msg', 'Update BERHASIL');
        }
    }

    public function editrombel($id){
$data = Rombels::findOrFail($id);
// return  $data;
return view('rombel.editrombel', ["data" => $data]);
    }


    public function rombel(){
        
        $data = Rombels::all();
        return view('rombel.index',['data' => $data]);
    }

    public function tambahrombel(){
        return view('rombel.tambahrombel');
    }
}
