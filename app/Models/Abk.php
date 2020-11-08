<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abk extends Model
{
    use HasFactory;

    protected $table = "Abk";
    protected $fillable = [
        'user_id','unit_kerja_id','ikhtisar_jabatan','uraian_tugas',
        'satuan_hasil','waktu_pengerjaan','waktu_penyelesaian','beban_kerja','pegawai','jumlah',
        'uraian_parent_id','id_jabatan'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class,'id_jabatan','id');
    }

}
