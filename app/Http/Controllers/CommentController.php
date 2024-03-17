<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comment.commenets', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['fullname'=>'required|string',
                             'email'=>'required|string',
                             'comment'=>'required|string',
                       ]);
        
            $comment = new Comment;
        $comment->fullname = $request->fullname;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back()->withSuccess(' Your Comment has has been recorded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.create', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
                $request->validate(['fullname'=>'required|string',
                'email'=>'required|string',
                'comment'=>'required|string',
            ]);

        $comment->fill($request->all());
        $comment->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->withSuccess('Comment Deleted.');
    }
}
