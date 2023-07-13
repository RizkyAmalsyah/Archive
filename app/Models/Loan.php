<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
  use SoftDeletes, HasFactory;

  protected $fillable = [
    'id_user', 'kode_arsip',
    'tanggal_pinjam', 'tanggal_kembali', 'status_pinjaman'
  ];

  protected $hidden = [];


  public function archive()
  {
      return $this->belongsTo(Archive::class, 'kode_arsip', 'kode_arsip');
  }

  public function user()
  {
      return $this->belongsTo(User::class, 'id_user', 'id');
  }
}
