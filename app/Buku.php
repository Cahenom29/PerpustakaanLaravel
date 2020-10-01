<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fillable = ['judul','pengarang', 'penerbit','isbn','tahun_terbit','tempat','stok','foto_cover'];
}
