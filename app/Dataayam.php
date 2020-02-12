<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataayam extends Model
{
    protected $fillable = [
        'no','jenis','harga','berat',
        'gambar'
    ];
    public $timestamps = true;

    public function dataayam()
    {
        return $this->belongsTo('App\Dataayam','id_dataayam');
    }
}
