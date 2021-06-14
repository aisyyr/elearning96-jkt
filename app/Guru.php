<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Guru as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guru extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip_guru', 'id_regist', 'id_pelajaran'
    ];
    
    public $timestamps = false;

    public function kode_regist() //digunakan di controller
    {
        // return $this belongsTo //nama model koderegist , id_regist;
        //model di kode regist bikin relasi kayak di hasMany
    }

    //id pelajaran : belongToMany -> karena relasi nya many to many
    //di model pelajaran bikin relasi juga yang hasMany


    // public function reviews()
    // {
    //     return $this->hasMany(Review::class, 'mua_id', 'id');
    // }

    //tambahin relasi tabel koderegistrasi dan pelajaran


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
