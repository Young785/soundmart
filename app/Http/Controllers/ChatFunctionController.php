<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Friend;
use App\Like;
use App\Message;
use App\Notifications\ChatNotification;
use App\Notifications\profilePicNotification;
use App\Notifications\UpdatedProfileNotification;
use App\Notifications\coverPicNotification;
use App\Notifications\friendRequestNotification;
use App\Notifications\ReceiverRequestNotification;
use App\Notifications\recfriendRequestNotification;
use App\Notifications\SenderRequestNotification;
use App\Post;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

class ChatFunctionController extends Controller
{
    public function registerFun()
    {   
        $data = request()->validate([
            'fullname' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'dob' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'password' => 'required|min:8',
            'confPass' => 'required|same:password',
        ]);

        $data = new User();
        $data['fullname'] = request("fullname");
        $data['name'] = request("name");
        $data['email'] = request("email");
        $data['dob'] = request("dob");
        $data['phone'] = request("phone");
        $data['gender'] = request("gender");
        $data['status'] = "0";
        $data['password'] = Hash::make(request("password"));
        $data['secrete_id'] = rand($min = 0, $max = 10000000000);
        $data->save();

        return redirect("/pages/login")->with("mssg", "Thanks for Joining ChatBook, We hope you get the Satisfaction you desire! You can now login below.");
    }
    public function loginFun()
    {
        $data = request()->validate([
            'email' => 'required',
            'password' => 'required|min:1',
        ]);
        $email = request("email");

        $check = User::where('email', $email)->first('password');
        $pass = request("password");
        // dd($check->password);

        if (Auth::attempt($data)) {
            // if (password_verify($pass, $check->password)) {
                $id = Auth::user()->id;
                User::where("id", $id)->update(['status' => '1']);
                return redirect("/");
            }else{
                return redirect("/page/login")->with("msg", "The email or password is Wrong!");
            // }
        }
    }
    public function edit_profile(Request $request, $secrete_id)
    {
        $data = request()->validate([
            'fullname' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);
        $about = $request->about;
        $occupation = $request->occupation;
        $education = $request->education;
        $place = $request->place;

        if ($about || $occupation || $education|| $place !=null) {
            $data['name'] = $request->name;
            $data['fullname'] = $request->fullname;
            $data['phone'] = $request->phone;
            $data['about'] = $request->about;
            $data['education'] = $request->education;
            $data['place'] = $request->place;
            $data['occupation'] = $request->occupation;
        }else{
            $data['name'] = $request->name;
            $data['fullname'] = $request->fullname;
            $data['phone'] = $request->phone;
        }


        if ($request->hasFile('user_image')) {
            $file = request()->file('user_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('users/', $filename);

            $data['name'] = $request->name;
            $data['fullname'] = $request->fullname;
            $data['phone'] = $request->phone;
            $data['user_image'] = $filename;
        }

        $pass = Auth::user()->password;
        $input = $request->password;

        if (password_verify($input, $pass)) {

            Auth::user()->notify(new UpdatedProfileNotification);

            User::where("secrete_id", $secrete_id)->update($data);

            return redirect("/")->with("msg", "You Successfully Updated your Profile!");
        }else{
            return redirect("/profile/$secrete_id/edit-profile")->with("msg", "The Password is incorrect!");
        }
    }
    public function notification($id)
    {
        $authId = Auth::user()->id;
        $user = User::find($authId);

        $del = $user->notifications->where("id", $id);

        $user->notifications->first()->delete($del);

        return redirect("/notifications")->with("msg", "Notification deleted Successfully!");
    }

    public function post(Request $request)
    {
        $data = new Post();
        $data->image_name = $request->image_name;
        $id = Auth::user()->id;
        $data->user_id = $id;
        // return $request->image;
        $images = array();
        if($request->hasFile('image')){
            $files = request()->file('image');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move("posts/", $filename);
                $images[] = $filename;
                // dd($images);
                $data->image = implode('/', $images);
                $data->type = substr($filename, -3);
        }
         $data->save();

         Post::where("id", $data->id)->update(["post_id" => $data->id]);
         $result = Post::where("id", $data->id)->first();
         session()->put("result", $result);
        return response()->json($result);
        // return redirect("/")->with("mssg", "Notification deleted Successfully!");
        }
        $data->save();
        return redirect("/")->with("mssg", "Notification deleted Successfully!");
    }

    public function user_image($secrete_id)
    {
        $user = User::where("secrete_id", $secrete_id)->get("id");
        // dd($user[0]->id);
        $data = request()->validate([
            "user_image" => "required|mimes:png,jpg,jpeg",
        ]);

        $file = request()->file('user_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('users/', substr($filename, 0, 10).'.'.$secrete_id.'.jpg');

        User::where("id", $user[0]->id)->update(['user_image'=> $filename]);

        Auth::user()->notify(new profilePicNotification);
        
        $imageres = User::where("id", $user[0]->id)->first();
        
        return response()->json($imageres);
    }
    public function cover($secrete_id)
    {
        $user = User::where("secrete_id", $secrete_id)->get("id");
        // $data = request()->validate([
        //     "user_cover_image" => "required|mimes:png,jpg,jpeg",
        // ]);
        $image = request("user_cover_image");
        // "<script>console.log($image)</script>";
        $file = request()->file("user_cover_image");     
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;

        $image_data = getimagesize($image);
        // dd($image_data);

        $width = $image_data[0];
        $height = $image_data[1];

        if ($width != 1000 && $height != 315) {
           
            // $file->move('cover/', substr($filename, 0, 10).'.'.$secrete_id.'.jpg');
            
            $image_resize = Image::make($image);              
            $image_resize->resize(1000, 315);
            $file->move('cover/', substr($filename, 0, 10).'.'.$secrete_id.'.jpg');

             User::where("id", $user[0]->id)->update(['user_cover_image'=> $filename]);

            Auth::user()->notify(new coverPicNotification);

            $res = User::where("id", $user[0]->id)->first();
            return response()->json($res);
            // echo "<script>alert('The image width should be in the range of
            // 1000px and the height of 315px! if not crop the image. Thanks!')</script>";
        }else{
            
        $file->move('cover/', substr($filename, 0, 10).'.'.$secrete_id.'.jpg');

         User::where("id", $user[0]->id)->update(['user_cover_image'=> $filename]);

        Auth::user()->notify(new coverPicNotification);

        $res = User::where("id", $user[0]->id)->first();

        return response()->json($res);
            
        }
    }
    public function frequest($id)
    {
        $send_id = Auth::user()->id;
        $rec_id = session()->put("id", $id);

        $data['sender_id'] = Auth::user()->id;
        $data['receiver_id'] = $id;
        $data['request_status'] = "pending";
    
        $check = Friend::create($data);
        $req_id = $check->id;
        $user_check = User::where("id", $id)->first();

        session()->put("rec", $user_check);

        $user_check->notify(new ReceiverRequestNotification);
        Auth::user()->notify(new SenderRequestNotification);
        
        session()->forget("rec");
        return response()->json($req_id);
        // return redirect()->back()->with("mssg", "Friend Request sent Successfully!");
    }
    public function canRequest($id)
    {
       $friends = Friend::where("id", $id)->delete();
    //    $id = $friends->id;

       return response()->json($friends);
    //    return redirect()->back()->with("delMsg", "You Cancelled the friend request Successfully!");
    }
    public function conRequest($id)
    {
        Friend::where("id", $id)->update(["request_status" => "accepted"]);
        
        return redirect()->back()->with("req_acc", "You Successfully Accepted the friend Request!");
    }
    public function LikePost(Request $request){

        if (isset($_POST['liked'])) {
            $id = Auth::user()->id;
            $post_id = $_POST['post_id'];

            $data['post_id'] = $_POST['post_id'];

            $data['user_id'] = $id;
            
            Like::create($data);
            $count = Like::where("post_id", $post_id)->count();

            return response()->json($count);

        }
        if (isset($_POST['disliked'])) {
            $id = Auth::user()->id;
            $post_id = $_POST['post_id'];

            Like::where("post_id", $post_id)->where("user_id", $id)->delete();

            $count = Like::where("post_id", $post_id)->count();
            session()->put("post_id", $post_id);

            return response()->json($count);
        }
    }
    public function comment()
    {
        $id = Auth::user()->id;
        $post_id = $_POST['post_id'];

        $data['post_id'] = $_POST['post_id'];
        $data['user_id'] = $id;
        $data['comment'] = $_POST['comment'];
        
        $create = Comment::create($data);
        Comment::where("id", $create->id)->update(["comment_id" => $create->id]);
        
        $comments = Comment::rightjoin("users", "comments.user_id", "=","users.id")->where("post_id", $post_id)->get();
        foreach ($comments as $key => $result) {
            $date = Comment::where("comment_id", $result->comment_id)->first();
        }
        session()->put("post_id", $post_id);
        return response()->json($result);
    }
    public function fetch()
    {
        return view("user.fetch_comments");
    }
    public function action_search()
    {
        return view("user.fetch_search");
    }
    function action(Request $request)
    {
        if($request->ajax())
        {
            $query = $request->get('query');
            session()->put("query", $query);
            if($query != '')
            {
                $data = User::where('name', 'like', '%'.$query.'%')
                ->orWhere('fullname', 'like', '%'.$query.'%')
                ->orWhere('email', 'like', '%'.$query.'%')
                ->orderBy('created_at', 'desc')
                ->get();
                return response()->json($data);
            }
            else
            {
            session()->put("query", $query);

            $data = User::orderBy('created_at', 'desc')
                ->get();
                return response()->json($data);
            }
        }
    }
    function insertChat(Request $request)
    {
        $id= Auth::user()->id;
        $rec =  $_POST['receiver_id'];
        $msg =  $_POST['message'];
        $data['sender_id'] = $id;
        $data['receiver_id'] = $rec;
        $data['message'] = $msg;
        $data['msg_status'] = "0";

        $query = Message::create($data);
        $com_id = $query->id;
        Message::where("id", $com_id)->update(['comment_id' => $com_id]);
        session()->put("query", $query);

        $chat_details = Message::where("id", $com_id)->first();
        session()->put("chat_details", $chat_details);
        Auth::user()->notify(new ChatNotification());


        return response()->json($query);
    }
    public function fetch_chat()
    {
        return view("user.fetch_chat");
    }
    public function all_chat()
    {
        $from = Auth::user()->id;
        $to = $_POST['to_user_id'];
        return view("user.all_chats", compact("from", "to" ));
      
    }
    public function update_is_typing()
    {
        $id = Auth::user()->id;
        $is_typing = $_POST['is_typing'];
        $user_id = $_POST['user_id'];
        $update_type = User::where("id", $id)->update(['is_typing' => $is_typing]);

      return view("user\update_is_typing_status", compact("user_id", "id"));
    }
    public function fetch_user()
    {
        return view("user.fetch_user");
    }
    public function fetch_o_user(Request $id, $res)
    {
        $user = Friend::where("id", $id)->get();
        return view("user.fetch_on_user", compact("id", "res"));
    }
    public function return_post()
    {
        return view("user.return-posts");
    }
}
