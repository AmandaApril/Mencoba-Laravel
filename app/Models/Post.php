<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Amanda April",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quasi nesciunt nostrum aspernatur, consequuntur libero eum praesentium necessitatibus saepe debitis voluptate neque autem, magni quo iste delectus doloribus molestias laudantium eius? Earum, ipsum. Eligendi illum, reprehenderit cum consectetur consequatur hic sit officiis itaque quo quae aspernatur quos vel harum. Facilis, modi? Mollitia eaque, doloribus voluptatum rem nam ad, saepe enim voluptatibus officia numquam, ratione repudiandae facilis laboriosam earum neque adipisci! Illo beatae nulla enim saepe quis inventore facere dolore autem!",
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ramadhani Joys Figo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, nisi. Ducimus iste itaque modi magnam. Ut tenetur, reprehenderit quis veritatis, aliquid in adipisci vel repellat est praesentium, nostrum dignissimos doloribus? Excepturi provident perspiciatis odio fugiat quasi error soluta sed, iure dolor facilis maiores quisquam quia accusamus. Officiis velit a corporis nisi laudantium dicta repudiandae quos. Vero cum repellat, excepturi ad ab fuga praesentium aperiam tempore, incidunt omnis nihil asperiores aliquam neque quae nam nobis consequatur, sint porro optio magni culpa itaque odit! Voluptatibus adipisci, perspiciatis, sint maiores veritatis eum odit laudantium provident culpa ab molestiae, sapiente reiciendis doloribus pariatur sequi?",
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
