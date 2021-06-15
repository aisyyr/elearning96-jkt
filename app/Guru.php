<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    public $timestamps = false;

    protected $fillable = [
        'nip_guru', 
        'id_pelajaran',
        'id_regist',
    ];

    //FK id_pelajaran
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }

    //FK id_regist
    public function kode_registrasi()
    {
        return $this->belongsTo(Kode_Registrasi::class, 'id_regist');
    }

    //Relasi fk dari table user
    public function user()
    {
        return $this->hasMany(User::class, 'nip_guru', 'nip_guru');
    }

    //Relasi fk dari table File_MTGuru
    public function file_mtguru()
    {
        return $this->hasMany(File_MTGuru::class, 'nip_guru', 'nip_guru');
    }

}
