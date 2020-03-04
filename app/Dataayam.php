<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataayam extends Model
{
    protected $fillable = ['jenis_ayam','berat',];
    public $timestamps = true;

    public function dataayam()
        {
            return $this->belongsTo('App\Dataayam','id_dataayam');
        }
    }

