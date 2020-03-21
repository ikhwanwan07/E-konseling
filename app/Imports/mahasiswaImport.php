<?php

namespace App\Imports;

use App\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class mahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(Collection $row)
    {

        dd($row);

        foreach ($rows as $row) 
        {
           // Data::create([
             //   'nim' => $row[1],
               // 'nama' => $row[1],
                //'nim' => $row[1],
            //]);
        }
       // return new Data([
         //   'nim' => $row[1],
           // 'nama' => $row[2], 
            //'ipk1' => $row[3],
            //'ipk2' => $row[4],
            //'ipk3' => $row[5],
            //'ipk4' => $row[6],
            //'ipk5' => $row[7],

        //]);
    }
}
