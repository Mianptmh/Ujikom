<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table="barang";
    protected $primaryKey="id";
    protected $fillable=['id','jenis','harga'];
}
