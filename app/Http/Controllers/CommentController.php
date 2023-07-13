<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

  public function index(Request $request)
  {
    return view('contact'); 
  }

  public function show(Request $request)
  {
    $items = Comment::all();
    return view('pages.pegawai.comment', [
      'items' => $items    
    ]);  
  }


  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|max:30',
      'subject' => 'required|max:50',
      'email' => 'required|email',
      'message' => 'required|',
    ]);

    $post = [
      'name' => $request->input('name'),
      'subject' => $request->input('subject'),
      'email' => $request->input('email'),
      'message' => $request->input('message'),
    ];

    Comment::create($post);

    

    return redirect()->route('comment.index')->with('status', 'Terima kasih telah mengirimkan pesan');
  }
}
