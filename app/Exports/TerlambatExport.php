<?php

namespace App\Exports;

use App\Models\Lates;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TerlambatExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Lates::with('users')->get()->unique('id');


    }
    // nama nama th dari file excel
    public function headings(): array{
        return[
       "no", "Nama", "Tanggal", "infromasi","jumlah telat"
        ];
    }
    // map : data yang akan dumunculkan di excelnya ( foreach di blade)
public function map($item) : array
{

    return [
       
        $item->id,
        $item->users['name'],
        $item->date_time_late,
        $item->information,
        $item->where('id',$item->id)->count()
    ];
}
}
