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
    'title' => 'Home'
  ]);
});

Route::get('/about', function () {
  return view('about', [
    'title' => 'About',
    'name' => 'Noval Muammar',
    'email' => 'novalmuammar@gmail.com',
    'image' => 'noval.jpg'
  ]);
});

$blog_posts = [
  [
    'title' => 'Judul Post Pertama',
    'slug' => 'judul-post-pertama',
    'author' => 'Noval Muammar',
    'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem adipisci omnis modi ad impedit consequatur illum nisi assumenda quos sequi odio, natus expedita quas corporis tempora itaque architecto deserunt, corrupti consequuntur voluptate eum, hic optio unde. Placeat dolorum veniam ipsum adipisci illum, cumque maiores soluta sapiente optio fugiat? Ex reprehenderit laboriosam maxime accusamus reiciendis quae et. Beatae, necessitatibus? Eaque cumque blanditiis maiores illum delectus! Nemo deserunt porro accusantium placeat, quam eos expedita dignissimos dolor perferendis consectetur nobis, cum dicta quo.'
  ],
  [
    'title' => 'Judul Post Kedua',
    'slug' => 'judul-post-kedua',
    'author' => 'Noval Muammar',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ipsa recusandae temporibus omnis corrupti eos necessitatibus delectus tempore maxime aliquid ad illum doloremque mollitia quae quasi praesentium magnam minima, voluptatem debitis, facilis laudantium dignissimos et perspiciatis laborum! Animi modi a suscipit nam itaque, doloribus assumenda. Minima sint culpa quod, exercitationem eaque ad quidem magnam veritatis optio praesentium nesciunt illum sunt? Nobis, officia rem tenetur repellat est, quaerat accusantium possimus inventore placeat quidem voluptatum iste vel! Repudiandae iusto, quisquam distinctio pariatur voluptatem ratione, eos magnam doloremque minus placeat a. Veritatis ipsum nulla nisi. Iusto non asperiores ipsa quo nesciunt eum minus.'
  ]
];

Route::get('/blog', function () use ($blog_posts) {
  return view('posts', [
    'title' => 'Blog',
    'posts' => $blog_posts
  ]);
});

Route::get('/posts/{slug}', function ($slug) use ($blog_posts) {

  $post = [];
  foreach ($blog_posts as $post) {
    if ($post['slug'] === $slug) {
      $newPost = $post;
      break;
    }
  }

  return view('post', [
    'title' => 'Single post',
    'post' => $newPost
  ]);
});
