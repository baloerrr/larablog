<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Polsri",
            "slug" => "polsri",
            "author" => "Muhammad Akbar Adityah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est velit voluptas suscipit enim. Velit obcaecati, eius autem reiciendis architecto aut fugiat blanditiis, aperiam esse in unde voluptas dignissimos atque totam!
            "
        ],
        [
            "title" => "Unsri",
            "slug" => "unsri",
            "author" => "Adhim",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est velit voluptas suscipit enim. Velit obcaecati, eius autem reiciendis architecto aut fugiat blanditiis, aperiam esse in unde voluptas dignissimos atque totam!
            "
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
