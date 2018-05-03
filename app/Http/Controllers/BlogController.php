<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return View
     */
    public function index()
    {
        $posts = Post::blog()->get();

        return view('pages.blog.index')->with([
            'posts' => $posts
        ]);
    }

    /**
     * Display a single post.
     *
     * @return View
     */
    public function show(Post $post)
    {
        return view('pages.blog.show')->with([
            'post' => $post
        ]);
    }
}