<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;
use Session;
use Storage;
class CommentsController extends Controller
{
    
    public function index(Request $request) {
        $this->validate($request, [
            'post_id' => 'exists:posts,id|numeric',
            'comment' => 'required|max:255'
        ]);
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->save();

        Session::flash('success', 'Your comment was succesffuly added');
        return redirect()->back();
    }
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('show')->withComment($comment);
    }
     public function edit($id)
    {
        $comment = Comment::find($id);
        if (Auth::user()->id != $comment->user_id) {
            abort(404);
        }
        if ($comment == null) {
            abort(404);
        }
       
        return view('comment-edit')->withComment($comment);
    }
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        if (Auth::user()->id != $comment->user_id) {
            abort(404);
        }
        if ($comment == null) {
            abort(404);
        }
         $this->validate($request, [
            //'post_id' => 'exists:posts,id|numeric',
            'comment' => 'required|max:255'
        ]);

        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
       // $comment->post_id = $request->post_id;
        
        $comment->save();

        Session::flash('success', 'Comment was successfully edited');
        return redirect()->back();
    }
     public function destroy($id)
    {
        $comment = Comment::find($id);
        if (Auth::user()->id != $comment->user_id) {
            abort(404);
        }
        if ($comment == null) {
            abort(404);
        }
        
        $comment->delete();
        Session::flash('success', 'comment was succesfully deleted');
        return redirect()->back();
    }
}
