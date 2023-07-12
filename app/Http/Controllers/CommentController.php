<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show($id)
    {

        $blog = Blog::findOrFail($id);
        $comments = Comment::where('blogs_id', $blog->id)->get();
        $commentCount = Comment::where('blogs_id', $blog->id)->count();

        return view('components.blogDetails', compact('blog', 'comments', 'commentCount'));
    }
}
