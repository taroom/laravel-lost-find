<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama', 'slug', 'deskripsi'];

    public function barang()
    {
        return $this->belongsTo('App\Barang');
    }
}
