<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {
        // dd($idea->id);
        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->content = request()->get("content","");
        $comment->save();

        // $vilidate = request()->validate([
        //     "content"=> "required|min:5|max:200",
        // ]);
        // Comment::create($vilidate);

        return view('dashboard',[
            'comments'=> Comment::orderBy('created_at','desc'),

        ])->with("success","You Comment is successful Adding");
    }
}
