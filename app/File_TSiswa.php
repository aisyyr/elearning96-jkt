<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_TSiswa extends Model
{
    protected $table = 'file_tsiswa';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'file_tugas',
        'keterangan',
        'nisn_siswa', 
        'id_pelajaran',
        'id_kelas',
    ];

    //FK nisn_siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn_siswa');
    }

    //FK id_pelajaran
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }

    //FK id_kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    //Relasi fk dari table Nilai_Tugas
    public function nilai_tugas()
    {
        return $this->hasMany(Nilai_Tugas::class, 'id_tugas', 'id');
    }
}
