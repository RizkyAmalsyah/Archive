<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;


class LoanController extends Controller
{
  public function index(Request $request)
  {
    $items = Loan::with([
      'archive', 'user'
    ])->get();

    return view('pages.pegawai.peminjaman.index', [
      'items'=>$items
    ]); 
  }

  public function show($id)
  {
    $item = Loan::with([
      'archive', 'user'
    ])->findorFail($id);

    return view('pages.pegawai.peminjaman.edit', [
      'item' => $item
    ]);
  }

  public function update(Request $request, $id)
  {
    $data = $request->all();
    $item = Loan::findorFail($id);
    $item->update($data);

    return redirect()->route('admin-loan.index')->with('status', 'Berhasil di Update!');
  }
}
