<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Models\Comment;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }


    public function blogDetail($id)
    {


        $blog = Blog::with('comment')->findOrFail($id);
        $comments = $blog->comment;
        $commentCount = $blog->comment->count();
        //        return $blog;
        return view('pages.singleBlog', compact('blog', 'comments', 'commentCount'));

        $blog = Blog::find($id);

        // Pass the blog post to the view
        return view('pages.singleBlog', ['blog' => $blog]);
    }

    /**
     * @return Collection
     */
    public function blogAjax(Request $request)
    {
        return Blog::get();
    }



    public function store(Request $request)
    {

        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'blogs_id' => $request->blogs_id
        ]);

        return response()->json(['success' => 'Comment added successfully.']);
    }
}
