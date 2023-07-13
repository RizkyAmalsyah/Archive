<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
      $items = Loan::with([
        'archive'
        ])->where('status_pinjaman', 'dipinjam')->where('id' , Auth::user()->id)->get();

      return view('pages.user.dashboard', [
        'archive' => Archive::count(),
        'archive_date' =>Archive::where('created_at', Carbon::today())->count(),
        'loan' => Loan::where('id_user', Auth::user()->id)->count(),
        'loan_date' =>Loan::where('created_at', Carbon::today())->where('id_user',Auth::user()->id)->count(),
        'user' => User::count(),
        'user_date' =>User::where('created_at', Carbon::today())->count(),
        'items' => $items
      ]);
    } 
}

// 