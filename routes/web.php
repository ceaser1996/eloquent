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
//Route::get('/find', function()
//{
////    /*
////    * for all records in collection
////    * $posts = collection()
////     * */
////    
// $posts = Post::get()->sortBy('id');
// 
////
//// $posts = Post::orderBy('created_at')->get();
//// $posts = Post::get()->sortBy('created_at');
//// 
////    /*
////    * get record by primary key
////    * $post = array()
////     * */
////    
//// $post = Post::where('title', 'sumanta')->exists();
//// dump($post);
//// 
//// $posts = Post::all();
//// //collections methods
// 
// foreach ($posts as $post) {
//     return $post->get();
//  
// }
//});
//    #for one recorf or particular record
//    $post= Post::find(2);
//    return $post->title;
//});
/*
|--------------------------------------------------------------------------
| Retreiving data using contraints
|--------------------------------------------------------------------------
|
*/
//Route::get('/findwhere', function (){
//    $post= Post::orderBy('id','desc')->skip(2)->take(1)->get();
//    return $post;
//}
//    );
/*
|--------------------------------------------------------------------------
| MOre ways to retreive models
|--------------------------------------------------------------------------
|
*/
Route::get('/findmore',function(){
//     $post = Post::where('title', 'sumanta')->exists();
    $post=Post::findOrFail('5');
    return $post;
//     dump($post);
}
    );
 
    