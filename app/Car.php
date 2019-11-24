<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // yang gak boleh di isi
    // protected $guarded  = ['nama', 'nohp', 'merk', 'plat'];

    // yang boleh di isi
    protected $fillable = ['nama', 'nohp', 'merk', 'plat', 'harga'];
}
