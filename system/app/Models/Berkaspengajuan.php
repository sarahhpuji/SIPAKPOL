<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Berkaspengajuan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'berkas_pengajuan';

    protected $fillable = [
        'id',
        'id_dosen',
        'fungsional',
        'sk_pengantar',
        'fcsk_pengangkatan',
        'fc_ijazah',
        'transkip',
        'spabsahkarim',
        'hasil_validasi',
        'link_bukti',
        'skfungsional',
        'skpangter',
        'nidn',
        'skruangan',
        'skgol',
        'nilaipeer',
        'karyailmiah',
        'linkkarya',
        'skp',
        'status_berkas',
        'sp_pendidikan',
        'sp_penunjang',
        'sp_penelitian',
        'sp_penunjang',
        'deskripsi',
    ];

    // Untuk field sk Pengantar
    function uploadSkpengantar(){
        if(request()->hasFile('sk_pengantar')){
            $this->deleteSkpengantar();
            $sk_pengantar = request()->file('sk_pengantar');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr .".".$sk_pengantar->extension();
            $url = $sk_pengantar->storeAs($destination, $filename);
            $this->sk_pengantar = "app/".$url;
            $this->save;
        }
    }

    function deleteSkpengantar(){
        $sk_pengantar= $this->sk_pengantar;
        if($sk_pengantar){
            $path = public_path($sk_pengantar);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }



    // function updateSkpengantar( $request){
    //     $sk_pengantar= $this->sk_pengantar;
    //     if($sk_pengantar->hasFile('sk_pengantar')) {
    //         $sk_pengantar = $request->file('sk_pengantar');

    //         // Menghapus file lama jika ada
    //         if ($sk_pengantar->file) {
    //             Storage::disk('local')->delete($sk_pengantar->file);
    //         }

    //         // Menyimpan file baru
    //         $path = $sk_pengantar->store('path_to_storage_directory');
    //         $Berkaspe->file = $path;
    //     }

    //     // Menyimpan data yang telah diperbarui
    //     $data->save();

    // }
    // --------------------------------- //\

    // Untuk field fcsk pengangkatan
    function uploadSk_pengangkatan(){
        if(request()->hasFile('fcsk_pengangkatan')){
            $this->deleteSk_pengangkatan();
            $fcsk_pengangkatan = request()->file('fcsk_pengangkatan');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$fcsk_pengangkatan->extension();
            $url = $fcsk_pengangkatan->storeAs($destination, $filename);
            $this->fcsk_pengangkatan = "app/".$url;
            $this->save;
        }
    }

    function deleteSk_pengangkatan(){
        $fcsk_pengangkatan= $this->fcsk_pengangkatan;
        if($fcsk_pengangkatan){
            $path = public_path($fcsk_pengangkatan);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field fc ijazah
    function uploadIjazah(){
        if(request()->hasFile('fc_ijazah')){
            $this->deleteIjazah();
            $fc_ijazah = request()->file('fc_ijazah');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$fc_ijazah->extension();
            $url = $fc_ijazah->storeAs($destination, $filename);
            $this->fc_ijazah = "app/".$url;
            $this->save;
        }
    }
    function deleteIjazah(){
        $fc_ijazah= $this->fc_ijazah;
        if($fc_ijazah){
            $path = public_path($fc_ijazah);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field transkip
    function uploadTranskip(){
        if(request()->hasFile('transkip')){
            $this->deleteTranskip();
            $transkip = request()->file('transkip');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$transkip->extension();
            $url = $transkip->storeAs($destination, $filename);
            $this->transkip = "app/".$url;
            $this->save;
        }
    }
    function deleteTranskip(){
        $transkip= $this->transkip;
        if($transkip){
            $path = public_path($transkip);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field absahkarya
    function uploadAbsahkarya(){
        if(request()->hasFile('spabsahkarim')){
            $this->deleteAbsahkarya();
            $spabsahkarim = request()->file('spabsahkarim');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$spabsahkarim->extension();
            $url = $spabsahkarim->storeAs($destination, $filename);
            $this->spabsahkarim = "app/".$url;
            $this->save;
        }
    }
    function deleteAbsahkarya(){
        $spabsahkarim= $this->spabsahkarim;
        if($spabsahkarim){
            $path = public_path($spabsahkarim);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field hasil validasi
    function uploadHasil_validasi(){
        if(request()->hasFile('hasil_validasi')){
            $this->deleteHasil_validasi();
            $hasil_validasi = request()->file('hasil_validasi');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$hasil_validasi->extension();
            $url = $hasil_validasi->storeAs($destination, $filename);
            $this->hasil_validasi = "app/".$url;
            $this->save;
        }
    }
    function deleteHasil_validasi(){
        $hasil_validasi= $this->hasil_validasi;
        if($hasil_validasi){
            $path = public_path($hasil_validasi);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field dupak
    function uploadDupak(){
        if(request()->hasFile('dupak')){
            $this->deleteDupak();
            $dupak = request()->file('dupak');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$dupak->extension();
            $url = $dupak->storeAs($destination, $filename);
            $this->dupak = "app/".$url;
            $this->save;
        }
    }
    function deleteDupak(){
        $dupak= $this->dupak;
        if($dupak){
            $path = public_path($dupak);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field skfungsional
    function uploadSkfungsional(){
        if(request()->hasFile('skfungsional')){
            $this->deleteSkfungsional();
            $skfungsional = request()->file('skfungsional');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$skfungsional->extension();
            $url = $skfungsional->storeAs($destination, $filename);
            $this->skfungsional = "app/".$url;
            $this->save;
        }
    }
    function deleteSkfungsional(){
        $skfungsional= $this->skfungsional;
        if($skfungsional){
            $path = public_path($skfungsional);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field skpangter
    function uploadSkpangter(){
        if(request()->hasFile('skpangter')){
            $this->deleteSkpangter();
            $skpangter = request()->file('skpangter');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$skpangter->extension();
            $url = $skpangter->storeAs($destination, $filename);
            $this->skpangter = "app/".$url;
            $this->save;
        }
    }
    function deleteSkpangter(){
        $skpangter= $this->skpangter;
        if($skpangter){
            $path = public_path($skpangter);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field nidn
    function uploadNidn(){
        if(request()->hasFile('nidn')){
            $this->deleteNidn();
            $nidn = request()->file('nidn');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$nidn->extension();
            $url = $nidn->storeAs($destination, $filename);
            $this->nidn = "app/".$url;
            $this->save;
        }
    }
    function deleteNidn(){
        $nidn= $this->nidn;
        if($nidn){
            $path = public_path($nidn);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field skruangan
    function uploadSkruangan(){
        if(request()->hasFile('skruangan')){
            $this->deleteSkruangan();
            $skruangan = request()->file('skruangan');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$skruangan->extension();
            $url = $skruangan->storeAs($destination, $filename);
            $this->skruangan = "app/".$url;
            $this->save;
        }
    }
    function deleteSkruangan(){
        $skruangan= $this->skruangan;
        if($skruangan){
            $path = public_path($skruangan);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field skgol
    function uploadSkgol(){
        if(request()->hasFile('skgol')){
            $this->deleteSkgol();
            $skgol = request()->file('skgol');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$skgol->extension();
            $url = $skgol->storeAs($destination, $filename);
            $this->skgol = "app/".$url;
            $this->save;
        }
    }
    function deleteSkgol(){
        $skgol= $this->skgol;
        if($skgol){
            $path = public_path($skgol);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field nilaipeer
    function uploadNilaipeer(){
        if(request()->hasFile('nilaipeer')){
            $this->deleteNilaipeer();
            $nilaipeer = request()->file('nilaipeer');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$nilaipeer->extension();
            $url = $nilaipeer->storeAs($destination, $filename);
            $this->nilaipeer = "app/".$url;
            $this->save;
        }
    }
    function deleteNilaipeer(){
        $nilaipeer= $this->nilaipeer;
        if($nilaipeer){
            $path = public_path($nilaipeer);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field karyailmiah
    function uploadKaryailmiah(){
        if(request()->hasFile('karyailmiah')){
            $this->deleteKaryailmiah();
            $karyailmiah = request()->file('karyailmiah');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$karyailmiah->extension();
            $url = $karyailmiah->storeAs($destination, $filename);
            $this->karyailmiah = "app/".$url;
            $this->save;
        }
    }
    function deleteKaryailmiah(){
        $karyailmiah= $this->karyailmiah;
        if($karyailmiah){
            $path = public_path($karyailmiah);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    // Untuk field skp
    function uploadSkp(){
        if(request()->hasFile('skp')){
            $this->deleteSkp();
            $skp = request()->file('skp');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$skp->extension();
            $url = $skp->storeAs($destination, $filename);
            $this->skp = "app/".$url;
            $this->save;
        }
    }
    function deleteSkp(){
        $skp= $this->skp;
        if($skp){
            $path = public_path($skp);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
    // --------------------------------- //

    function uploadSppendidikan(){
        if(request()->hasFile('sp_pendidikan')){
            $this->deleteSppendidikan();
            $sp_pendidikan = request()->file('sp_pendidikan');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$sp_pendidikan->extension();
            $url = $sp_pendidikan->storeAs($destination, $filename);
            $this->sp_pendidikan = "app/".$url;
            $this->save;
        }
    }
    function deleteSppendidikan(){
        $sp_pendidikan= $this->sp_pendidikan;
        if($sp_pendidikan){
            $path = public_path($sp_pendidikan);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }

    function uploadSppengabdian(){
        if(request()->hasFile('sp_pengabdian')){
            $this->deleteSppengabdian();
            $sp_pengabdian = request()->file('sp_pengabdian');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$sp_pengabdian->extension();
            $url = $sp_pengabdian->storeAs($destination, $filename);
            $this->sp_pengabdian = "app/".$url;
            $this->save;
        }
    }
    function deleteSppengabdian(){
        $sp_pengabdian= $this->sp_pengabdian;
        if($sp_pengabdian){
            $path = public_path($sp_pengabdian);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }

    function uploadSppenelitian(){
        if(request()->hasFile('sp_penelitian')){
            $this->deleteSppenelitian();
            $sp_penelitian = request()->file('sp_penelitian');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$sp_penelitian->extension();
            $url = $sp_penelitian->storeAs($destination, $filename);
            $this->sp_penelitian = "app/".$url;
            $this->save;
        }
    }
    function deleteSppenelitian(){
        $sp_penelitian= $this->sp_penelitian;
        if($sp_penelitian){
            $path = public_path($sp_penelitian);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }

    function uploadSppenunjang(){
        if(request()->hasFile('sp_penunjang')){
            $this->deleteSppenunjang();
            $sp_penunjang = request()->file('sp_penunjang');
            $destination = "Berkaspengajuan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$sp_penunjang->extension();
            $url = $sp_penunjang->storeAs($destination, $filename);
            $this->sp_penunjang = "app/".$url;
            $this->save;
        }
    }
    function deleteSppenunjang(){
        $sp_penunjang= $this->sp_penunjang;
        if($sp_penunjang){
            $path = public_path($sp_penunjang);
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