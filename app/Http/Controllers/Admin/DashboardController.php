<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
      $items1 = Loan::with([
        'user' , 'archive'
        ])->where('status_pinjaman', 'dipinjam')->get();

        $items2 = Loan::with([
          'user' , 'archive'
          ])->where('status_pinjaman', 'request')->get();

      return view('pages.pegawai.dashboard', [
        'archive' => Archive::count(),
        'archive_date' =>Archive::where('created_at', Carbon::today())->count(),
        'loan' => Loan::count(),
        'loan_date' =>Loan::where('created_at', Carbon::today())->count(),
        'user' => User::count(),
        'user_date' =>User::where('created_at', Carbon::today())->count(),
        'items1' => $items1,
        'items2' => $items2
      ]);
    } 
}

// 