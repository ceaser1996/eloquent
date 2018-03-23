<?php
use App\Post;
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
| Eloquent
|--------------------------------------------------------------------------
|
*/
Route::get('/find', function()
{
//    for all records
// $post=Post::all();
// foreach ($post as $posts) {
//  echo $posts;
//  
// }
    #for one recorf or particular record
    $post= Post::find(2);
    return $post->title;
});
