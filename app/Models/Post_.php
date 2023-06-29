<?php

namespace App\Models;

class Post
{
    static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fairuz Ulum",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, ad natus praesentium dicta nihil quaerat velit sed, eius esse repellendus nostrum voluptatibus porro quisquam distinctio facilis! Ipsa necessitatibus animi repellendus corporis officia dolorum reprehenderit nemo, autem tempore numquam fugit accusamus incidunt consequatur mollitia nostrum est voluptas temporibus quisquam exercitationem voluptate dolor. Neque illo voluptatibus natus enim. Veritatis deserunt quasi, consequatur voluptas minus dolorem assumenda ducimus incidunt in rem ipsa quas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nabila",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus perferendis obcaecati rem dolore ab consequuntur nobis amet, labore facere eos? Assumenda fuga repellendus ducimus consequuntur nisi neque eum quis repudiandae quos numquam? Dolores, quaerat praesentium expedita nostrum voluptate molestiae et atque nulla laboriosam. Natus aspernatur iusto distinctio officia! Commodi est soluta dignissimos cum. Eligendi animi illo facere impedit, rerum ad eius cumque neque quod minus dolore cum possimus aut cupiditate quae excepturi. Voluptates sunt itaque corporis commodi facilis, veniam autem sed! Accusamus, beatae pariatur sit odit minima quos exercitationem officiis cupiditate dolor vel eligendi dolorum quaerat sunt tempore eum ipsam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
