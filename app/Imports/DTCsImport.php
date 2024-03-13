<?php

namespace App\Imports;

use App\Models\dtc;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DTCsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new dtc([
            'DTC_Code'=>$row['dtc_code'],
            'Endtc'=>$row['endtc'],
            'Khdtc'=>$row['khdtc'],
        ]);
    }
}
