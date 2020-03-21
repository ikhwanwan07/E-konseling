<?php

namespace App\Exports;

use App\mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class mahasiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mahasiswa::all();
    }
}
