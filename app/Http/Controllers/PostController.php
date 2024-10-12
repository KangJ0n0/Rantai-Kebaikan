<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PostController extends Controller
{
    // Method to display a list of posts with optional category filtering
    public function galangdana(Request $request)
    {
        
        $query = Post::query();

        // Check if the request has 'categories' input, then filter based on it
        if ($request->has('categories')) {
            $categories = $request->input('categories');
            $query->whereIn('kategori', $categories);
        }

          // Check if there's a search query and filter posts by judul
    if ($request->has('search') && $request->input('search') != '') {
        $search = $request->input('search');
        $query->where('judul', 'like', '%' . $search . '%');
    }

        // Retrieve the filtered or unfiltered posts
        $posts = $query->get();
        $posts = $query->orderByRaw("CASE WHEN status = 'Berlangsung' THEN 1 ELSE 2 END")
            ->paginate(12);

     

        // Return the view with the posts data
        return view('galangdana', compact('posts'));
    }

    // Display a single post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.detail', ['post' => $post]);
    }

    public function index()
{
    
    // Get the posts with a deadline that is in the future, ordered by deadline
    $posts = Post::where('deadline', '>', Carbon::now())
        ->orderBy('deadline', 'asc')
        ->take(3)
        ->get();

    return view('home', compact('posts'));
}
}