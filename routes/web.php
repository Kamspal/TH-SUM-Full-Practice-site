<?php

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/work', function(){
    return view('work');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('blog/category/news', function(){
    return view('news');
});

Route::get('blog/category/news/page2', function(){
    return view('news-page2');
});

Route::get('blog/category/projects', function(){
    return view('projects');
});

Route::get('blog/category/stuff_we_like', function(){
    return view('stuff-we-like');
});

Route::get('blog/page2', function(){
    return view('blog1');
});

Route::get('blog/bc-sports-hall-of-fame', function(){
    return view('news1');
});

Route::get('blog/event-planning', function(){
    return view('news2');
});

Route::get('blog/flight-path-park', function(){
    return view('news3');
});

Route::get('blog/jukepop-serials', function(){
    return view('news4');
});

Route::get('blog/hasting-crossing-BIA', function(){
    return view('news5');
});

Route::get('blog/latest-gifts', function(){
    return view('news6');
});

Route::get('blog/icebreaker-merino-wool', function(){
    return view('news7');
});

Route::get('blog/spencer-welch-vocal-studio', function(){
    return view('news8');
});

Route::get('blog/dans-plan', function(){
    return view('news9');
});

Route::get('blog/sonic-tonic', function(){
    return view('news10');
});

Route::get('blog/vancouver-is-awesome', function(){
    return view('news11');
});

Route::get('blog/san-francisco-aquarium', function(){
    return view('news12');
});

Route::get('blog/water-everywhere', function(){
    return view('news13');
});

Route::get('blog/real-blog', function(){
    return view('news14');
});

Route::get('blog/new-site', function(){
    return view('news15');
});

Route::get('/contact', function(){
    return view('contact');
});
