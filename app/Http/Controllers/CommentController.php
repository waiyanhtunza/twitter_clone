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
        // $comment = new Comment();
        // $comment->idea_id = $idea->id;
        // $comment->content = request()->get("content","");
        // $comment->save();

        $vilidate = request()->validate([
            "comment"=> "required|min:5|max:200",
        ]);
        // dd($idea->id);
        Comment::create([
                'user_id' =>auth()->user()->id,
                'idea_id'=>$idea->id,
                'comment'=>$vilidate['comment'],

        ]);

        return redirect()->route('dashboard')->with("success","You Comment is successful Adding");
    }
}
