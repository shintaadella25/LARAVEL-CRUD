<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children extends Model
{
    protected $table= 'children';
    protected $fillable = ['nik','nama','alamat','buku','email','handphone'];
}
