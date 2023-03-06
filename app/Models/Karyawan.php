<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['nik','gender','shift','jabatan','divisi','no_hp','alamat','mulai_kerja','selesai_kerja','gaji'];
    protected $guareded = ['id'];


    public function relasi_karyawan() {
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}
