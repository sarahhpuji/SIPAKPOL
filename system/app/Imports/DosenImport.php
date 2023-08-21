<?php

namespace App\Imports;

use App\Models\Dosen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DosenImport implements ToModel, WithHeadingRow{
    use Importable;
    public function model(array $row){
        return new Dosen([
            'nip' =>  $row['nip'],
            'nama' => $row['nama'],
            'gelar_depan' => $row['gelar_depan'],
            'gelar_belakang' => $row['gelar_belakang'],
            'unit_kerja' => $row['unit_kerja'],
            'status' => $row['status'],
            'golongan' => $row['golongan'],
            'gol_tmt' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['gol_tmt']),
            'skpengper' => $row['skpengper'],
            'skpengter' => $row['skpengter'],
            'skgol' => $row['skgol'],
            'skmasakerja' => $row['skmasakerja'],
            'struktural' => $row['struktural'],
            'fungsional' => $row['fungsional'],
            'ijazah' => $row['ijazah'],
            'jurusan' => $row['jurusan'],
            'asalpt' => $row['asalpt'],
            'tahunlulus' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tahunlulus']),
            'tempatlahir' => $row['tempatlahir'],
            'tanggallahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggallahir']),
            'jeniskelamin' => $row['jeniskelamin'],
            'password' => bcrypt($row['password']),
        ]);
    }
    
}
