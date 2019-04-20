<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the resume page.
     *
     * @return View
     */
    public function resume()
    {
        $workPosts = Post::work()->get();

        return view('pages.resume')->with([
            'workPosts' => $workPosts
        ]);
    }
}
