<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File__M_T_Guru_Kelas extends Model
{
    protected $table = 'file__m_t_guru_kelas';

    protected $fillable = [
        'id',
        'file__m_t_guru_id',
        'kelas_id',
        'created_at',
        'updated_at',
    ];
}
