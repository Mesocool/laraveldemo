<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate();
        return view('blog.index', compact('posts'));
    }

    public function showPost($id)
    {
        $post = Post::find($id);
        return view('blog.post', ['post' => $post]);
    }
}
