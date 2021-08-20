<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\video;
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
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
|  POLYMORPHIC MANY TO MANY RELATIONSHIP
|--------------------------------------------------------------------------
*/

Route::get('/create', function(){

    $post = Post::create(['name' => 'My first post']);
    $tag1 = Tag::find(1);
    $post->tags()->save($tag1);

    $video = video::create(['name' => 'video.mov']);
    $tag2 = Tag::find(2);
    $video->tags()->save($tag2);

});
