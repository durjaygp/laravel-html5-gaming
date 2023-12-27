<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'comment'=>'required|max:255',
        ]);
        $com = new Comment();
        $com->user_id = $request->user_id;
        $com->blog_id = $request->blog_id;
        $com->comment = $request->comment;
        $com->save();
        return redirect()->back()->with('success','Thanks for the Comment');
    }
}
