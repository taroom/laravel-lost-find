<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['gambar', 'deskripsi', 'tanggal_menemukan', 'tempat_menemukan'];

    public function kategori()
    {
        return $this->hasOne('App\Kategori', 'id', 'id_kategori');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
