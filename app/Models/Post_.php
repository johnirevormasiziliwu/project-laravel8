<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Johni Revormasi Ziliwu",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam eos, beatae ut quod accusamus numquam sed, ea omnis recusandae quam cum similique molestias ipsa autem nostrum veniam! Harum in dolore voluptatem perspiciatis quo? Ex, consequuntur minus? Nihil vitae saepe qui ullam quia voluptas, iure illo eligendi illum magnam, sint sapiente quam non dolore deserunt vel. Obcaecati quo natus accusamus nulla eligendi laboriosam nihil perspiciatis, omnis molestiae sequi vel, ducimus iure quasi excepturi asperiores et odit recusandae temporibus veritatis aliquid! Impedit.
        "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "David Kristian Ziliwu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates inventore quisquam velit quam corrupti fuga iste ratione esse aliquid. Assumenda a officiis cupiditate ducimus tenetur explicabo delectus ullam ut perspiciatis quisquam eos nihil exercitationem in dolorum, quia laboriosam eius ipsum non accusantium fuga nobis placeat, tempore labore. Similique, iste! Hic quis quos quae, perferendis eum quo magni sit, animi doloremque nostrum quisquam minima error, rem dolore nulla. Tempora similique ullam odio cum rerum repudiandae nesciunt, labore quidem consectetur porro error aperiam culpa, quam quibusdam minima debitis doloribus esse quos voluptas eos quia beatae? Repellendus enim illum voluptas ipsam rem possimus.
        "
        ],
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