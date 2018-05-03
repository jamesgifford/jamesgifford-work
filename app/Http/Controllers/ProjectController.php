<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return View
     */
    public function index()
    {
        $posts = Post::project()->get();

        return view('pages.project.index')->with([
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
        return view('pages.project.show')->with([
            'post' => $post
        ]);
    }
}