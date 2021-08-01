<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'roles', 
        // 'nip_guru', 
        'nisn_siswa',
    ];
    
    public $timestamps = false;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //FK nip_guru
    // public function guru()
    // {
    //     return $this->belongsTo(Guru::class, 'nip_guru');
    // }

    //FK nisn_siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn_siswa');
    }

    //Relasi fk dari table file_informasi
    public function file_informasi()
    {
        return $this->hasMany(File_Informasi::class, 'id_user_admin', 'id');
    }
}
