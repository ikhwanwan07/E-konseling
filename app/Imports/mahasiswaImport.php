<?php

namespace App\Imports;

use App\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class mahasiswaImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
      return 2;
    }
    
    public function model(array $row)
    {        
        return new Data([
          'nim' => $row[1],
          'nama' => $row[2],
          'ipk_sem_1' => $row[3],
          'ipk_sem_2' => $row[4],
          'ipk_sem_3' => $row[5],
          'ipk_sem_4' => $row[6],
          'ipk_sem_5' => $row[7]
        ]);
    }
}
