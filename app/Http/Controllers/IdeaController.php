<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(Idea $idea)   
    {
        // dd($request);
        $vilidate = request()->validate([
            "content"=> "required|min:5|max:200",
        ]);
        $vilidate['user_id'] = auth()->user()->id;
     
        Idea::create($vilidate);
        return redirect()->route('dashboard')->with("success","Your Success Adding Idea");
    }

    public function destroy(Idea $idea)
    {
        if(auth()->user()->id !== $idea->user_id)
        {
            abort(404);
        }
        $idea->delete();
        return redirect()->route("dashboard")->with("delete-success","Your Success Delete Idea");
    }
    
    public function show(Idea $idea)
    {
        return view("ideas.show-detail", compact("idea"));
    }

    public function edit(Idea $idea)
    {   
        if(auth()->user()->id !== $idea->user_id)
        {
            abort(404);
        }
        $editing = true;
        return view("ideas.show-detail", compact("idea",'editing'));
    }

    public function update(Idea $idea)
    {   
        if(auth()->user()->id !== $idea->user_id)
        {
            abort(404);
        }
        $validate = request()->validate([
            "content"=> "required|min:5|max:200",
        ]);
        $idea->update($validate);
        return redirect()->route("ideas.show",$idea->id)->with("update","Your Success Update Idea");
    }
}
