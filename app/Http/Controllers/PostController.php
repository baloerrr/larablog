<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use DeepCopy\Filter\Filter;

class PostController extends Controller
{
    public function home()
    {
        return view('home', [
            'active' => 'home'
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About Guaaaa",
            'active' => 'about',
            "name" => "Muhammad Akbar Adityah"
        ]);
    }

    public function all()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        $title = '';
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            'active' => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function find(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            'active' => 'posts',
            "post" => $post
        ]);
    }

    // public function findCategory(Category $category)
    // {
    //     return view('posts', [
    //         'title' => "Posts By Category : $category->name",
    //         'active' => 'posts',
    //         'posts' => $category->posts->load(['category', 'author']),
    //         'category' => $category->name
    //     ]);
    // }

    // public function findByAuthor(User $author)
    // {
    //     return view('posts', [
    //         'title' => "Posts By Author : $author->name ",
    //         'active' => 'posts',
    //         'posts' => $author->posts->load(['category', 'author'])
    //     ]);
    // }

    public function showCategories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
