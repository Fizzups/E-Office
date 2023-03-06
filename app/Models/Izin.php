<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;
    protected $fillable = ['nama','divisi','tgl_mulai','tgl_selesai','alasan','bukti'];
    protected $guareded = [];
}   
