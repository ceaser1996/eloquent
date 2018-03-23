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
//Route::get('/findmore',function(){
////     $post = Post::where('title', 'sumanta')->exists();
//    $post=Post::findOrFail('5');
//    return $post;
////     dump($post);
//}
//    );
 
    /*
|--------------------------------------------------------------------------
| Inserting Or Saving Data
|--------------------------------------------------------------------------
|
*/
    //orm=Object Relation mapping
  
//    Route::get('/basicInsert',function(){
//        
//        //fo inserting single data
//        $post=new Post;
//        $post->title='neweoquenttitle';
//        $post->content='asddasdas';
//        $post->isAdmin="0";
//        $post->save();//it will insert he method and update it 
//    }
//        );
            /*
|--------------------------------------------------------------------------
|Altering data
|--------------------------------------------------------------------------
|
*/
//        Route::get('/updatesingle',function(){
//            $post=Post::find(1);//it will find data with id 1 and then we can update the 
//            $post->title='sumanta';
//            $post->content="asdasdasdad";
//            $post->isAdmin="0";
//            $post->save();
//        }
//            );
//        
        
        
        
            /*
|--------------------------------------------------------------------------
| Inserting Mass Data
|--------------------------------------------------------------------------
|
*/

     //laravel prevent multiple record to be updated for this we need to add something insid model
//If we dont add anything we will get an exception as massassigment asception 
//for this 
//Route::get('/mass',function(){
//    Post::create(['title'=>'sumit','content'=>'friend','isAdmin'=>'1']); //it will take array 
//    //insert multiple data into it
//    
//}
//    );
                /*
|--------------------------------------------------------------------------
| Updating Data using laravel eloquent
|--------------------------------------------------------------------------
|
*/
//Route::get('/update',function(){
//    
//    Post::where('id',1)->where('isAdmin',0)->update(['title'=>'suman','content'=>'luminoguru','isAdmin'=>0]);
//}
//    );
                    /*
|--------------------------------------------------------------------------
| Deleting  Data using laravel eloquent
|--------------------------------------------------------------------------
|
*/
//    Route::get('/delete',function(){
//        $post=Post::find(1);
//        $post->delete();
//        
//    }
                        /*
|--------------------------------------------------------------------------
| Deleting  Data using laravel eloquent using destroy
|--------------------------------------------------------------------------
|
*/
//        );
//        Route::get('/destroy',function(){
//      Post::destroy(2);
//        
//    }
//        );
//    
    // we can destroy multiple records using destroy([4,5]);

