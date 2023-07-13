<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classification extends Model
{
  use SoftDeletes, HasFactory;

  protected $fillable = [
    'nip', 'kode_klasifikasi', 'nama_klasifikasi'
  ];

  protected $hidden = [];

  // public function archive()
  // {
  //   return $this->hasMany(Archive::class, 'kode_klasifikasi', 'kode_klasifikasi');
  // }

  public function archives()
  {
      return $this->hasMany(Archive::class, 'kode_klasifikasi', 'kode_klasifikasi');
  }
}
