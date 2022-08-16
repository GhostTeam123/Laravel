<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
// use Spatie\YamlFrontMatter\YamlFrontMatter;
// use App\Models\Post;  // importing php files 

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


// to get the logs from the database requests

// Route::get('/', function(){
//     \Illuminate\Support\Facades\DB::listen(function ($query){
//         logger($query->sql);
//     });

// });
Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest()->get() // get the latest post        --------> check in Post.php to understand with eager loading by default
    ]);
   
}); 

Route::get('posts/{post:slug}', function(Post $post) {  // give me the post where the slug matches the slug you provide 
    // var_dump($id);
    // var_dump(Post::find($id)->title);
    // $lie = Post::findOrFail($id);
    // var_dump($lie->title);
    // dd($lie);
    // return view('post', [
        
    // ]);
    return view('post', [
        'post' => $post
    ]);
});
//wild card matches with variable

// category has many posts
Route::get('categories/{category:slug}', function (Category $category) { // here we want the category with the slug so now we access the slug as category:slug
    //var_dump($category->posts);
    // return view('posts', [
    //     'posts' => $category->posts->load(['category', 'author'])
    // ]);
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function (User $author) { // here we want to visit authors/author page where we fetch the author name from from user class and we have considered the user->id by overriting
    //dd($author);
    // return view('posts', [
    //     'posts' => $author->posts->load(['category', 'author'])  // we have the user we want to fetch the posts written by that user we have writen the User has many posts 
    // ]);
    return view('posts', [
        'posts' => $author->posts  // we have the user we want to fetch the posts written by that user we have writen the User has many posts 
    ]);

    // eager load: 
        // so load the posts written by the author
});