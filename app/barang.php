<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['nama_barang','jenis','berat','harga']; 
}
