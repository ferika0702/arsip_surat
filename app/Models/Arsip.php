<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $table ="arsip_surat";
    protected $primaryKey = "id";
    protected $fillable =["nomor","judul","kategori","file"];
    public $timestamps;
}
