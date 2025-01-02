<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:130',
        ]);

        $post = Post::findOrFail($postId);

        $post->comments()->create($request->all());

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
