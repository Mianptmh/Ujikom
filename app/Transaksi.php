<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'jumlah_ayam','alamat',
        'total_harga','id_pembeli','id_dataayam'
    ];
    public $timestamps = true;

    public function pembeli()
    {
        return $this->belongsTo('App\Pembeli','id_pembeli');
    }

    public function dataayam()
    {
        return $this->belongsTo('App\Dataayam','id_dataayam');
    }
}
