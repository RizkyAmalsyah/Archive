<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;
use Response;

class ListdokumenController extends Controller
{
  public function index(Request $request)
  {
    // $classifications = Classification::all();
    $items = Archive::with([
      'classification'
    ])->get();

    return view('pages.pegawai.arsip.listdokumen', [
      'items' => $items
    ]); 
  }

  public function store($file_name)
  {
    $filePath = public_path('storage/posts/'.$file_name);

    return Response::download($filePath);
      // $myFile = storage_path("public/posts/$archives->file_path");
    
      // return response()->download($myFile);
  }
}
