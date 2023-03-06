<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_surat','tanggal_masuk_surat','nomor_surat','pengirim_surat','perihal','foto','dokumen'];
    protected $guareded = [];
}
