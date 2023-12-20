<?php

namespace App\Http\Controllers;

use App\Models\Lates;
use App\Models\Students;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use App\Exports\TerlambatExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class terlambatController extends Controller
{
    public function cari(Request $req){
        // $date = $req->input('date');
        $nama_pembeli = $req->input('nama_pembeli');

        
   
            $terlambat = Lates::join('students','lates.id','=',"students.id")
            ->where('students.name','Like','%' . $nama_pembeli . '%')
            ->orderBy('lates.id','asc')->paginate(5);
// return $terlambats;
        

        // foreach($siswa as $sisw){
        //     // if(Lates)
        //     $we = $terlambat->where($terlambat["users"]["name"], 'like', '%' . $sisw . '%' )->get();
        // }
        // return $we;
        return view("terlambat.index",compact("terlambat"));
        
        

           

           

        

    }

    public function lihat($id){
        $lates =  Lates::with('users')->where('id',$id)->get();
        // return $lates;
        return view("terlambat.lihat",compact("lates"));
    }
    public function index(){
       $ter =  Lates::where('id','<',1000)->with('users')->simplePaginate(5);
    //    return $ter;
        return view('terlambat.index',['terlambat' => $ter]);
    }

    public function pdf($id){
        $late = Lates::with('users')->where('id',$id)->get();
        $pdf = PDF::loadView('terlambat.pdf',["late" => $late]);
        return $pdf->download();
    }

    public function rekap(){
       $ter =  Lates::select('id')->with('users')->groupBy('id')->get();
 

        return view('terlambat.rekap',['terlambat' => $ter]);
    }
    public function hapus($id,$wkt){
       $data = Lates::where('id','=',$id)->where('date_time_late','=',$wkt);

       $data->delete();
       return redirect('dataterlambat')->with('msg','berhasil apus');
        // return view('terlambat.index',['data' => $data]);
    }

    public function exportexcel(){
        // $data = 
        return Excel::download(new TerlambatExport, 'dataterlambat.xls');
    }
    public function store(Request $request)
    {
        $request->validate([
            'siswa' => 'required',
            'date_time' => 'required|date',
            'information' => 'required|string',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $buktiPath = $request->file('bukti')->store('public/bukti');

        Lates::create([
            'siswa_id' => $request->siswa,
            'bukti' => basename($buktiPath),
            'date_time' => $request->date_time,
            'information' => $request->information,
        ]);

        return redirect()->route('lates.index')->with('success', 'Berhasil menambahkan data!');
}
    public function createterlambat(Request $request){
    
     

        $request->validate([
            'id' => 'required',
            'date_time_late' => 'required|date',
            'information' => 'required|string',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $buktiPath = $request->file('bukti')->store('public/bukti');

        Lates::create([
            'id' => $request->id,
            'bukti' => basename($buktiPath),
            'date_time_late' => $request->date_time_late,
            'information' => $request->information,
        ]);

        return redirect('terlambat')->with('msg', 'Berhasil menambahkan data!');

        

    }
    public function update($id,Request $request){
        // $validated = $request->validate([
        //     // "users_id" => 'required',
        //     "rombel" => 'required'
        // ]);
        
        if(!empty($request) ){
            $data = Lates::findOrFail($id);
            $data->update($request->all());
    
            if($data){
                return redirect('terlambat')->with('msg', 'Update BERHASIL');
            }
        }else{
            return "isi dlu bos";
        }
    

    }
    public function tambahterlambat(){
        $siswa = Students::all();
        return view('terlambat.tambahterlambat',['siswa' => $siswa]);
    }
    public function edit($id){
        $data = Lates::with('users')->findOrFail($id);
        // return $data;
        // return  $data;
        return view('terlambat.edit', ["data" => $data]);
            }
        

}
