<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArchiveController extends Controller
{
  public function index()
  {
    $items = Archive::with([
      'classification'
    ])->get();

    return view('pages.user.arsip.listdokumen', [
      'items' => $items
    ]); 
  }

  public function show($id) {
    $item = Archive::with([
      'classification'
    ])->findorFail($id);

    return view('pages.user.arsip.request', [
      'item' => $item   
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'tanggal_pinjam' => 'required',
      'kode_arsip' => 'required|max:255'
    ]);

    $post = [
      'id_user' => Auth::user()->id,
      'kode_arsip' => $request->input('kode_arsip'),
      'tanggal_pinjam' => $request->input('tanggal_pinjam'),
    ];

    Loan::create($post);

    
    return redirect()->route('archive.index')->with('status', 'Peminjaman Sedang Di Proses!');
  }
  
}
