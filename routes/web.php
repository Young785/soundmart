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

use App\Friend;
use App\User;

Route::get('/', function () {
    $user = Auth::user();
    $id = Auth::user()->id;

    $posts = App\Post::all()->where("user_id", $id)->sortByDesc("created_at");

    $request = User::join("friends", "users.id","=", "friends.sender_id")
            ->where("receiver_id", $id)->where(["request_status" => "pending"])
            ->latest("friends.created_at")->first();

    // $online_friends =
    // dd($request);
    return view('user/index', compact("user", "posts", "request"));
})->middleware("chatbook");

Route::get('/page/login', "chatbookController@login");

Route::group(['prefix' => '/', 'middleware' => 'chatbook'], function () {

    Route::get('newsfeed', "chatbookController@newsfeed");

    Route::get('time-line', "chatbookController@timeline");

    Route::get('page', "chatbookController@page");
    Route::get('test', "chatbookController@test");

    Route::get('timeline-friends', "chatbookController@timeline_friends");

    // Route::get('timeline-images', "chatbookController@timeline_images");

    Route::get('timeline-videos', "chatbookController@timeline_videos");

    Route::get('messages', "chatbookController@message");

    Route::get('notifications', "chatbookController@notification");

    Route::get('people-nearby', "chatbookController@people_nearby");

    Route::get('messages', "chatbookController@message");

    Route::get('messages', "chatbookController@message");

    Route::get('messages', "chatbookController@message");

    Route::get('messages', "chatbookController@message");

    Route::get('profile/{id}', "chatbookController@profile");

    Route::get('/{secrete_id}/timeline-images', "chatbookController@photos");

    Route::get('ip_details', 'chatbookController@ip_details');

    Route::get('ip_details', 'chatbookController@ip_details');

    Route::get('search', 'chatbookController@search');

    Route::get('profile/{secrete_id}/edit-profile', "chatbookController@edit_profile");

    Route::get('logout', "chatbookController@logout");
});

Auth::routes();

Route::group(['prefix' => '/'], function () {

Route::post('page/login', "ChatFunctionController@loginFun");

Route::post('page/register', "ChatFunctionController@registerFun");

Route::post('profile/{secrete_id}/edit-profile', "ChatFunctionController@edit_profile")->middleware("chatbook");

Route::delete('notifications/{id}', "ChatFunctionController@notification")->middleware("chatbook");

Route::post('newsfeed', "ChatFunctionController@post")->middleware("chatbook");

Route::post('profile/{secrete_id}', "ChatFunctionController@user_image")->middleware("chatbook");

Route::post('profile/friend-request/{id}', "ChatFunctionController@frequest")->middleware("chatbook");

Route::post('profile/cancel-request/{id}', "ChatFunctionController@canRequest")->middleware("chatbook");

Route::put('friend-requests/confirm/{id}', "ChatFunctionController@conRequest")->middleware("chatbook");

Route::post('profile/{secrete_id}/cover', "ChatFunctionController@cover")->middleware("chatbook");
});
// Route::get('/test', function () {
//         $notifications = Auth::user()->unreadNotifications;

//         foreach ($notifications as $notification) {
//             dd($notification->data['name']);
//         }
//     });
    Route::get('/markAsRead', function () {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect("/");
    });

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
