<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassificationController extends Controller
{
  public function index()
  {
    $items = Classification::all()
      ->sortByDesc('id');

    // $items = Archive::with([
    //   'classification'
    //   ])->count();

    return view('pages.pegawai.klasifikasi', [
      'items' => $items,
      'archive' => Archive::with([
        'classification'
      ])->count()
  ]); 
  }

  public function store(Request $request)
  {
    $request->validate([
      'kode_klasifikasi' => 'required|max:15',
      'nama_klasifikasi' => 'required|max:60',
    ]);

    $post = [
      'nip' => Auth::user()->nip,
      'kode_klasifikasi' => $request->input('kode_klasifikasi'),
      'nama_klasifikasi' => $request->input('nama_klasifikasi'),
    ];

    Classification::create($post);

    

    return redirect()->route('admin-classification.index')->with('status', 'Klasifikasi Telah Dibuat');
  }

  public function destroy($id)
  {
    $item = Classification::findorFail($id);
    $item->delete();
    return redirect()->route('admin-classification.index');
  }

}
