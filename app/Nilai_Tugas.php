<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai_Tugas extends Model
{
    protected $table = 'nilai_tugas';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'nilaitugas',
        'keterangan',
        'id_tugas',
        'id_kelas',
        'nisn_siswa', 
        'id_pelajaran',
    ];

    //FK id_tugas
    public function file_tsiswa()
    {
        return $this->belongsTo(File_TSiswa::class, 'id_tugas');
    }

    //FK id_kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

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

}
