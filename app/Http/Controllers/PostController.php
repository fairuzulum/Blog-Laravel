<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    // public function index()
    // {
    //     return view('posts', [
    //         "title" => "All Post",
    //         "active" => "posts",
    //         "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
    //     ]);
    // }

    public function index()
    {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();

        // cek apakah terdapat hasil pencarian pada kategori yang dicari
        $ResultInCategory = $posts->where('category.slug', request('category'))->count() > 0;
        $ResultInAuthor = $posts->where('author.username', request('author'))->count() > 0;

        if (!$ResultInCategory && request('category')) {
            // jika tidak ada hasil pencarian di kategori yang dicari, tampilkan not found
            $not_found = true;
        } else if (!$ResultInAuthor && request('author')) {
            $not_found = true;
        } else {
            $not_found = false;
        }



        return view('posts', [
            "title" => "All Post" . $title,
            "active" => "posts",
            "posts" => $posts,
            "not_found" => $not_found, // tambahkan variabel not_found ke dalam view
        ]);
    }





    public function show(Post $post)
    {
        return view('post', [
            "active" => "posts",
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
