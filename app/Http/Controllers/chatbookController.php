<?php

namespace App\Http\Controllers;

use App\Checkin;
use App\Friend;
use App\Page;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Story;
use Symfony\Component\Console\Input\Input;

class chatbookController extends Controller
{
    public function sip()
    {
        return view('user\story_image_preview');
    }
    public function newsfeed()
    {
        $user = Auth::user();
        $id = Auth::user()->id;

        $posts = Post::all()->where("user_id", $id)->sortByDesc("created_at");

        $story = Story::all()->where("user_id", $id)->sortByDesc("created_at");
        
        $request = User::join("friends", "users.id","=", "friends.sender_id")
                ->where("receiver_id", $id)->where(["request_status" => "pending"])
                ->latest("friends.created_at")->first();

        return view("user/index", compact("user", "posts", "story", "request"));
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
        $auth_id = Auth::user()->id;
        $user = User::where("secrete_id", $secrete_id)->firstOrFail();

        $id = $user->id;
        $posts = Post::all()->where("user_id", $id)->sortByDesc("created_at");
        // dd($id);
        $s_id = $secrete_id;
        // 
        $check_friend = Friend::where(["sender_id" => $auth_id])->where(["receiver_id"=> $user->id])->orWhere(["sender_id"=> $user->id])->where(["receiver_id"=> $auth_id])->first();
        $friends = Friend::where(["request_status"=> "accepted"])->where(["sender_id" => $id])->orWhere(["receiver_id"=> $id])->get();
        
        // dd($check_friend);
        return view("user/profile", compact("user", "posts","s_id", "check_friend", "friends"));
    }
    public function edit_profile()
    {
        $user = Auth::user();

        return view("user/edit-profile", compact("user"));
    }
    public function logout()
    {
        $id = Auth::user()->id;
        User::where("id", $id)->update(['status' => '0']);

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
        $user = User::where("secrete_id", $secrete_id)->firstOrFail();
        $check_friend = Friend::where(["sender_id" => $id])->where(["receiver_id"=> $user->id])->orWhere(["sender_id"=> $user->id])->where(["receiver_id"=> $id])->first();
        $friends = Friend::where(["request_status"=> "accepted"])->where(["sender_id" => $id])->orWhere(["receiver_id"=> $id])->get();

        $friend =  User::join("friends", "users.id","=", "friends.sender_id")
        ->where("receiver_id", $id)->where(["request_status" => "accepted"])
        ->latest("friends.created_at")->get();
        foreach ($friends as $key => $value) {}

        // dd($value);
        $posts = Post::all()->where("user_id", $user->id)
            ->whereNotNull("type")->sortByDesc("created_at");

        $post_story = Post::where(["post_type"=> "story"])->get();
        $check_ins = Checkin::where(["user_id"=> $id])->get();
        $request = User::rightjoin("friends", "users.id","=", "friends.sender_id")
            ->where("receiver_id", $id)->where(["request_status" => "pending"])
            ->latest("friends.created_at")->get();
        // dd($request);
        // foreach ($posts as $key => $value) {
        //     $image_explode = explode("/", $value->image);
        //     foreach ($image_explode as $key => $v) {
        //         dd($v);
        //     }
        // }
        if (count($posts) == null) {
            $user_image = User::all()->where("id", $id);
            return view("user/timeline-photos", compact("posts", "users", "friends","friend", "check_friend", "request", "user", "post_story",  "check_ins", "user_image"));
        }else{
            foreach ($posts as $key => $value) {
                $image_explode = explode("/", $value->image);
            }

            $user_image = User::all()->where("id", $id);
            return view("user/timeline-photos", compact("posts", "users", "friends","friend", "check_friend", "request", "user", "image_explode", "check_ins",  "post_story", "user_image"));
        }
    }
    public function get_story($id)
    {
        $data = Story::where("id", $id)->first();
        return response()->json($data);
    }
    public function create_pages()
    {
        return view('user/create-page');
    }
        public function create_group()
    {
        return view('user/create-group');
    }
    public function check_name($cn)
    {
        $req_name = $cn;
        $data = Page::where('page_name', $req_name)->first();
        if($data != null){
            return response()->json($req_name);
        }else{
            return response()->json();
        }
    }
}
