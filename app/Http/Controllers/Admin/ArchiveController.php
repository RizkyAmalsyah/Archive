<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use App\Models\Classification;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ArchiveController extends Controller
{
  // public function index()
  // {
  //   $items = Archive::with(['classification'])->get();
    
  //   return view('pages.pegawai.inputdokumen', [
  //     'items' => $items    
  // ]); 
  // }

  public function index()
  {
    $classifications = Classification::all();
    return view('pages.pegawai.arsip.inputdokumen', [
      'classifications' => $classifications
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'kode_arsip' => 'required|max:20',
      'nomor_arsip' => 'required|max:30',
      'nama_arsip' => 'required|max:255',
      'file_arsip' => 'required|mimes:pdf,xlx,csv|max:2048',
    ]);

    //upload image
    $file = $request->file('file_arsip');
    $file->storeAs('public/posts', $file->hashName());

    $kode_arsip = $request->input('kode_arsip');
    $kode_klasifikasi = $request->input('kode_klasifikasi');
    $nama_arsip = $request->input('nama_arsip');
    $nomor_arsip = $request->input('nomor_arsip');
    
    Archive::create([
      'kode_arsip' => $kode_arsip,
      'nip' => Auth::user()->nip,
      'kode_klasifikasi' => $kode_klasifikasi,
      'file_path' => $file->hashName(),
      'nama_arsip' => $nama_arsip,
      'nomor_arsip' => $nomor_arsip
    ]);

    return redirect()->route('admin-archive.index')->with('status', 'Arsip Berhasil Disimpan!');
  }

  public function destroy($id)
  {
    $item = Classification::findorFail($id);
    $item->delete();
    return redirect()->route('admin-archive.index');
  }
}
