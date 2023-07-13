<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
  public function index(Request $request)
  {
    // $classifications = Classification::all();
    $items = Loan::with([
      'Archive'
    ])->where('id_user' , Auth::user()->id)->get();

    return view('pages.user.peminjaman', [
      'items' => $items
    ]);
  }

}
