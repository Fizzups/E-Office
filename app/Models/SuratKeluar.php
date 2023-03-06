<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_surat','tanggal_keluar_surat','nomor_surat','tujuan_surat','perihal','foto','dokumen'];
    protected $guareded = [];
}
