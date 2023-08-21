<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Templatee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'template';

    protected $fillable = [
        'id',
        'jenis_file',
        'file',
        'tgl_upload',
    ];

    function uploadformat(){
        if(request()->hasFile('file')){
            $this->deletefile();
            $file = request()->file('file');
            $destination = "Formattemplate";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/".$url;
            $this->save;
        }
    }
    function deletefile(){
        $file= $this->file;
        if($file){
            $path = public_path($file);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
}