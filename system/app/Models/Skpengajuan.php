<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Skpengajuan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'sk_pengajuan';

    protected $fillable = [
        'id',
        'id_dosen',
        'filesk',
    ];

    function uploadFilesk(){
        if(request()->hasFile('filesk')){
            $this->deleteFilesk();
            $filesk = request()->file('filesk');
            $destination = "FileSK";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr .".".$filesk->extension();
            $url = $filesk->storeAs($destination, $filename);
            $this->filesk = "app/".$url;
            $this->save;
        }
    }
    
    function deleteFilesk(){
        $filesk= $this->filesk;
        if($filesk){
            $path = public_path($filesk);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id');
    }
}