<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mbareb",
            "body" =>
                "Aliquip ex occaecat et qui voluptate quis incididunt officia aute quis et consequat. Occaecat eu voluptate eiusmod exercitation nostrud officia. Consectetur consectetur amet incididunt elit quis deserunt nulla. Mollit do labore nostrud nostrud ad exercitation cupidatat deserunt elit laborum consequat dolor non.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tumi",
            "body" =>
                "Cupidatat Lorem proident minim anim magna magna. Cillum cillum cillum esse pariatur ullamco consectetur nisi enim incididunt officia esse. Elit ut ad proident et culpa dolor ex esse. Sint velit ut nostrud cillum ad proident minim in nulla dolor. Non consectetur aute ullamco et consequat sit eu pariatur ullamco.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}