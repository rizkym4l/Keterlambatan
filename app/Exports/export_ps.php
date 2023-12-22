<?php

namespace App\Exports;

use App\Models\Lates;
use App\Models\Rayons;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class export_ps implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ps = Rayons::select('id')->where('user_id', '=', Auth::user()->id)->get();
        $siswaperrayon = Students::whereIn('rayon_id', $ps)->get();

        $siswartelat = collect();

        foreach ($siswaperrayon as $siswa) {
            $lates = Lates::with('users')->where('id', '=', $siswa->id)->get();
            $siswartelat = $siswartelat->merge($lates);
        }

        return $siswartelat->unique('id');
    }

    // nama nama th dari file excel
    public function headings(): array{
        return[
       "no", "Nama", "Tanggal", "infromasi","jumlah telat"
        ];
    }
    public function map($item): array
    {
        return [
            'ID' => $item->id,
            'Information' => $item->information,
            'User Name' => $item->users->name,
            'Date Time Late' => $item->date_time_late,
            'Count by ID' => Lates::where('id', $item->id)->count(),
            // Jika ingin menambahkan informasi tambahan, Anda dapat memasukkan di sini.
        ];
    }
    
}
