<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $posts = Post::query()->with('author');
        $categoryId = $request->category_id;
        if($categoryId) {
            $posts = $posts->whereHas('categories', function($query) use ($categoryId) {
                $query->where('categories.id', '=',$categoryId);
            });
        }
        $search = $request->search;
        if($search) {
            $posts = $posts->where('title', 'like',  '%' . $search . '%' );
        }
        $posts = $posts->get();

        return view('blog.index', compact('posts', 'categories'));
    }

    public function post($postId)
    {
        $post = Post::with('author')->where('id', $postId)->first();

        return view('blog.post', compact('post'));
    }
}
