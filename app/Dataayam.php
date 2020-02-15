<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataayam extends Model
{
    protected $fillable = ['jenis_ayam','berat','gambar'];
    public $timestamps = true;
}
