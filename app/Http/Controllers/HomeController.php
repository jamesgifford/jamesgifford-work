<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return void
     */
    public function index()
    {
        $blogPosts = Post::blog()->featured()->get();
        $workPosts = Post::work()->featured()->get();
        $projectPosts = Post::project()->featured()->get();

        return view('pages.home')->with([
            'blogPosts'     => $blogPosts,
            'workPosts'     => $workPosts,
            'projectPosts'  => $projectPosts
        ]);
    }
}
