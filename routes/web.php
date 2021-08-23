<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Amanda April Florencia",
        "email" => "aprilamanda490@gmail.com",
        "image" => "Amanda April Florencia.JPG"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman sigle post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});