<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back();
    }
}
