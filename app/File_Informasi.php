<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_Informasi extends Model
{
    protected $table = 'file_informasi';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'file_info',
        'file_doc',
        'tanggal_unggah',
        'keterangan', 
        'id_user_admin',
    ];

    //FK id_user_admin
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user_admin');
    }
}
