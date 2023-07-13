<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Archive extends Model
{
  use SoftDeletes, HasFactory;

  protected $fillable = [
    'kode_arsip', 'nip', 'kode_klasifikasi',
    'nama_arsip', 'file_path', 'nomor_arsip'
  ];

  protected $hidden = [];

  // public function classification()
  // {
  //   return $this->belongsTo(Classification::class, 'kode_klasifikasi', 'kode_klasifikasi');
  // }

  public function classification()
  {
      return $this->belongsTo(Classification::class, 'kode_klasifikasi', 'kode_klasifikasi');
  }

  public function loan()
  {
      return $this->ManyTo(Loan::class, 'kode_arsip', 'kode_arsip');
  }
}
