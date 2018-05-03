<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return View
     */
    public function index()
    {
        $posts = Post::work()->get();

        return view('pages.work.index')->with([
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
        return view('pages.work.show')->with([
            'post' => $post
        ]);
    }
}