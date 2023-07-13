<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AkunController extends Controller
{
  public function index(Request $request)
  {
    $items = User::all()
      ->sortByDesc('id');
    return view('pages.pegawai.akun', [
      'items' => $items    
    ]); 
  }

  public function store(Request $request)
    {
      $request->validate([
        'nip' => 'required|max:20',
        'name' => 'required|max:40',
        'email' => 'required|email',
        'password' => 'required|max:30',
      ]);

      $post = [
        'nip' => $request->input('nip'),
        'password' => Hash::make($request->password),
        'name' => $request->input('name'),
        'unit' => $request->input('unit'),
        'email' => $request->input('email'),
      ];

        // User::create([
        //     'name' => $request->name,
        //     'nip' => $request->nip,
        //     'unit' => $request->unit,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        User::create($post);

        return redirect()->route('admin-akun.index')->with('status', 'Akun Berhasil Dibuat!');
    }
}
