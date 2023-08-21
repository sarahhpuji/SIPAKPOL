<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'dosen';

    protected $fillable = [
            'nip',
            'nama',
            'gelar_depan',
            'gelar_belakang',
            'unit_kerja',
            'status',
            'golongan',
            'gol_tmt',
            'skpengper',
            'skpengter',
            'skgol',
            'skmasakerja',
            'struktural',
            'fungsional',
            'tmtfungsional',
            'ijazah',
            'jurusan',
            'asalpt',
            'tahunlulus',
            'tempatlahir',
            'tanggallahir',
            'jeniskelamin',
            'password'
    ];

    public function namalengkap() {
       

        if($this->gelar_depan != null){
            return $this->gelar_depan . '.' . $this->nama . ',' . $this->gelar_belakang;
        }else{
            return  $this->nama . ',' . $this->gelar_belakang;
        }
    }

    public function Berkaspengajuan()
    {
        return $this->hasMany(Berkaspengajuan::class, 'id_dosen');
    }

    public function Skpengajuan()
    {
        return $this->hasMany(Skpengajuan::class, 'id_dosen');
    }



}