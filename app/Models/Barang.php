<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','satuan_barang','jumlah_barang'];
    protected $guareded = ['id'];
}

