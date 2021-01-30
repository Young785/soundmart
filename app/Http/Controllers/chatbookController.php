<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Post;

use Symfony\Component\Console\Input\Input;

class chatbookController extends Controller
{
    public function newsfeed()
    {
        $user = Auth::user();
        $id = Auth::user()->id;

        $posts = Post::all()->where("user_id", $id)->sortByDesc("created_at");
        
        $request = User::join("friends", "users.id","=", "friends.sender_id")
                ->where("receiver_id", $id)->where(["request_status" => "pending"])
                ->latest("friends.created_at")->first();

        return view("user/index", compact("user", "posts", "request"));
    }
    public function page()
    {
        return view("user/page");
    }
    public function timeline_friends()
    {
        return view("user/timeline-friends");
    }
    // public function timeline_images()
    // {
    //     $id = Auth::user()->id;

    //     $posts = Post::all()->where("user_id", $id)
    //         ->whereNotNull("type")->sortByDesc("created_at");
    //     dd($posts);
    //     // return view("user/timeline-photos", compact("posts"));
    // }
    public function timeline_videos()
    {
        return view("user/timeline-videos");
    }
    public function message()
    {
        return view("user/messages");
    }
    public function notification()
    {
        $id = Auth::user()->id;
		$user = User::find($id);
        $notifications = $user->notifications;

        return view("user/notifications", compact("notifications", "user"));
    }
    public function people_nearby()
    {
        return view("user/people-nearby");
    }
    public function login()
    {
        return view("user/login");
    }
    public function timeline()
    {
        return view("user/time-line");
    }
    public function profile($secrete_id){
        $id = Auth::user()->id;
        $user = User::where("secrete_id", $secrete_id)->firstOrFail();

        $id = $user->id;
        $posts = Post::all()->where("user_id", $id)->sortByDesc("created_at");
        // dd($posts);
        $s_id = $secrete_id;
        
        $check_friend = Friend::where("sender_id", $id)->orWhere("receiver_id", $user->id)->first();
        return view("user/profile", compact("user", "posts","s_id", "check_friend"));
    }
    public function edit_profile()
    {
        $user = Auth::user();

        return view("user/edit-profile", compact("user"));
    }
    public function logout()
    {
        Auth::logout();

        return redirect("/page/login");
    }
    public function ip_details()
    {
        // $ip = request()->ip();
        $ip = "105.112.33.53";
        $data = Location::get($ip);

        dd($data);
        return view("user/ips", compact("data"));
    }
    public function settings()
    {
        return view("user/settings");
    }
    public function search()
    {
       $search_term = $_GET['q'];

       $user = User::where("name", "like", "%".$search_term."%")
                    ->orwhere("fullname", "like", "%".$search_term."%")
                    ->orwhere("email", "like", "%".$search_term."%")
                    ->orwhere("education", "like", "%".$search_term."%")
                    ->orwhere("place", "like", "%".$search_term."%")->paginate(4);

       return view("user.search", compact("user"));
    }
    public function test()
    {
        return view("user.test");
    }
    public function photos($secrete_id)
    {
        $id = Auth::user()->id;
        $users = User::all()->where("secrete_id", $secrete_id);

        $posts = Post::all()->where("user_id", $id)
            ->whereNotNull("type")->sortByDesc("created_at");
        // foreach ($posts as $key => $value) {
        //     $image_explode = explode("/", $value->image);
        //     foreach ($image_explode as $key => $v) {
        //         dd($v);
        //     }
        // }
        if (count($posts) == null) {
            $user_image = User::all()->where("id", $id);
            return view("user/timeline-photos", compact("posts", "users", "user_image"));
        }else{
            foreach ($posts as $key => $value) {
                $image_explode = explode("/", $value->image);
            }

            $user_image = User::all()->where("id", $id);
            return view("user/timeline-photos", compact("posts", "users", "image_explode", "user_image"));
        }
    }
}
