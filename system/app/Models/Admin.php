<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admin';

    protected $fillable = [
            'nama',
            'nip',
            'password',
            'foto',
            'email',
    ];

    function handleUpload(){
        if(request()->hasFile('foto')){
            $this->handleDelete();
            $skpengantar = request()->file('foto');
            $destination = "admin";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$skpengantar->extension();
            $url = $skpengantar->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save;
        }
    }
    function handleDelete(){
        $skpengantar= $this->foto;
        if($skpengantar){
            $path = public_path($skpengantar);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }



}

