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
        "name" => "Muhammad Rafif Tri Risqullah",
        "email" => "zeonkunix@gmail.com",
        "image" => "DSC_0184.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jeon",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur enim neque eveniet deserunt quas saepe sequi eos, nesciunt nobis placeat, numquam ipsa tempore distinctio blanditiis, quidem ducimus magnam fugiat rem ea! Facilis unde eveniet qui. Sequi quos illo rerum placeat dolor numquam praesentium officia temporibus optio voluptas! Sit, dolorum. Ad recusandae amet quibusdam fugit modi vitae ratione similique dolorem quidem magnam consequatur assumenda molestias, quia saepe fugiat eos, praesentium aliquid eligendi eaque ab quisquam facere. Quos quasi dolor modi optio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jeong",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt magni iusto quia expedita ipsam perferendis qui aut provident odio repellat, explicabo fugit assumenda minima beatae voluptas, quos pariatur molestias rem dignissimos. Molestias nisi dolor, aliquam labore quos nam non necessitatibus facilis reiciendis totam accusamus sit ab corrupti, voluptate dolore placeat. Officia quos porro sit voluptatum dolor laborum culpa neque illo quod? Autem vitae ex harum quibusdam deserunt quod, consequatur sed illum odit tempora ipsum quos natus modi necessitatibus maiores voluptate. Dolorum iure cupiditate sed dolor eos maiores excepturi aut, optio tempore voluptates itaque veniam rerum, maxime autem unde quod quidem officia necessitatibus illo quaerat? Perferendis nesciunt mollitia culpa ab, porro quaerat praesentium, et, modi excepturi ad reprehenderit veniam aliquid consequuntur iure delectus facilis consectetur voluptates quasi commodi tenetur! Exercitationem odio nam quia ex omnis ab voluptates sunt, quis amet. Totam vel aperiam nihil eius officiis incidunt earum qui consequatur nulla?" 
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Post
Route::get('post/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jeon",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur enim neque eveniet deserunt quas saepe sequi eos, nesciunt nobis placeat, numquam ipsa tempore distinctio blanditiis, quidem ducimus magnam fugiat rem ea! Facilis unde eveniet qui. Sequi quos illo rerum placeat dolor numquam praesentium officia temporibus optio voluptas! Sit, dolorum. Ad recusandae amet quibusdam fugit modi vitae ratione similique dolorem quidem magnam consequatur assumenda molestias, quia saepe fugiat eos, praesentium aliquid eligendi eaque ab quisquam facere. Quos quasi dolor modi optio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jeong",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt magni iusto quia expedita ipsam perferendis qui aut provident odio repellat, explicabo fugit assumenda minima beatae voluptas, quos pariatur molestias rem dignissimos. Molestias nisi dolor, aliquam labore quos nam non necessitatibus facilis reiciendis totam accusamus sit ab corrupti, voluptate dolore placeat. Officia quos porro sit voluptatum dolor laborum culpa neque illo quod? Autem vitae ex harum quibusdam deserunt quod, consequatur sed illum odit tempora ipsum quos natus modi necessitatibus maiores voluptate. Dolorum iure cupiditate sed dolor eos maiores excepturi aut, optio tempore voluptates itaque veniam rerum, maxime autem unde quod quidem officia necessitatibus illo quaerat? Perferendis nesciunt mollitia culpa ab, porro quaerat praesentium, et, modi excepturi ad reprehenderit veniam aliquid consequuntur iure delectus facilis consectetur voluptates quasi commodi tenetur! Exercitationem odio nam quia ex omnis ab voluptates sunt, quis amet. Totam vel aperiam nihil eius officiis incidunt earum qui consequatur nulla?" 
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});