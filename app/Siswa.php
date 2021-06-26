<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    public $timestamps = false;

    protected $fillable = [
        'nisn_siswa', 
        'id_kelas',
        'id_regist',
    ];

    //FK id_kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    //FK id_regist
    public function kode_registrasi()
    {
        return $this->belongsTo(Kode_Registrasi::class, 'id_regist');
    }

    //Relasi fk dari table user
    public function user()
    {
        return $this->hasMany(User::class, 'nisn_siswa', 'nisn_siswa');
    }

    // //Relasi fk dari table File_TSiswa (MANY TO MANY)
    // public function file_tsiswa()
    // {
    //     return $this->hasMany(File_TSiswa::class, 'nisn_siswa', 'nisn_siswa');
    // }

    //Relasi fk dari table Nilai_Tugas
    public function nilai_tugas()
    {
        return $this->hasMany(Nilai_Tugas::class, 'nisn_siswa', 'nisn_siswa');
    }
}
