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


    $friends = Friend::where("request_status", "accepted")->where("sender_id", $id)->orWhere("receiver_id", $id)->get();

    foreach ($friends as $key => $value) {}

    $posts = App\Post::rightjoin("users", "posts.user_id", "=", "users.id")
    ->where("user_id", $value->sender_id)->orWhere("user_id", $value->receiver_id)->inRandomOrder()->get();
    $postsId = App\Post::rightjoin("users", "posts.user_id", "=", "users.id")->where("user_id", $value->sender_id)->orWhere("user_id", $value->receiver_id)->inRandomOrder()->get("posts.id");
    $likes = App\Like::where("post_id", "10")->where("user_id", $id)->get();
    
    $request = User::join("friends", "users.id","=", "friends.sender_id")
            ->where("receiver_id", $id)->where(["request_status" => "pending"])
            ->latest("friends.created_at")->first();
    $contacts = User::where("status", "1")->get();
   
    // $friend_ids = '';

    // if (!empty($friends)) {
    //     foreach ($friends as $friend) {
    //     if ($friend->sender_id !== $id) {
    //         $friend_ids .= $friend['sender_id'] . ',';
    //     }
    //     if ($friend->receiver_id !== $id) {
    //         $friend_ids .= $friend['receiver_id'] . ',';
    //     }
    //     }
    // } else {
    //     return array();
    // }  # code...
    
     // Gather the list of friends id's.
    //  $friend_ids = substr($friend_ids, 0, (strlen($friend_ids) - 1)) .'';
     
   
    // $contacts = User::where("status", "1")->whereIn("id",[$friend_ids])->get();
    // if ($value->sender_id == $id) {
    //     $contacts = User::where("id", $value->receiver_id)->get();
    // }elseif ($value->receiver_id == $id) {
    //     $contacts = User::where("id", $value->sender_id)->get();
    // }else{
    //     dd("non");
    // }
    // dd($contacts);
   
    // $online_friends =
    return view('user/index', compact("user", "posts","postsId", "request", "contacts"));
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

Route::put('profile/friend-requests/confirm/{id}', "ChatFunctionController@conRequest")->middleware("chatbook");

Route::post('profile/cover/{secrete_id}', "ChatFunctionController@cover")->middleware("chatbook");

Route::post('/', 'ChatFunctionController@LikePost')->name('like')->middleware("chatbook");

Route::post('/return-post', 'ChatFunctionController@return_post')->middleware("chatbook");

Route::post('/comment', 'ChatFunctionController@comment')->middleware("chatbook");

Route::post('/fetch_user', 'ChatFunctionController@fetch_user')->middleware("chatbook");
Route::post('/fetch_on_user/{res}', 'ChatFunctionController@fetch_o_user')->middleware("chatbook");

Route::post('/fetch_comments', 'ChatFunctionController@fetch')->middleware("chatbook");
Route::get('/searchbox', 'ChatFunctionController@action')->middleware("chatbook");
Route::post('/fetch_search', 'ChatFunctionController@action_search')->middleware("chatbook");

Route::post('/insert_chat', 'ChatFunctionController@insertChat')->middleware("chatbook");
Route::post('/fetch_chat', 'ChatFunctionController@fetch_chat')->middleware("chatbook");
Route::post('/all_chats', 'ChatFunctionController@all_chat')->middleware("chatbook");

Route::post('/update_is_typing_status', 'ChatFunctionController@update_is_typing')->middleware("chatbook");

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
