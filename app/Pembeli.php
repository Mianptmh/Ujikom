<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = [
        'no','nama','alamat',
        'no_hp'
    ];
    public $timestamps = true;

    public function pembeli()
    {
        return $this->belongsTo('App\Pembeli','id_pembeli');
    }
}
