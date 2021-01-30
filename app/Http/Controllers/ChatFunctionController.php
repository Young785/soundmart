<?php

namespace App\Http\Controllers;

use App\Friend;
use App\Notifications\profilePicNotification;

use App\Notifications\UpdatedProfileNotification;

use App\Notifications\coverPicNotification;
use App\Notifications\friendRequestNotification;
use App\Notifications\recfriendRequestNotification;
use App\Post;
use Illuminate\Http\Request;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Hash;

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
        return redirect("/")->with("mssg", "Notification deleted Successfully!");
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

        return redirect("/profile/$secrete_id");
    }
    public function cover($secrete_id)
    {
        $user = User::where("secrete_id", $secrete_id)->get("id");
        $data = request()->validate([
            "user_cover_image" => "required|mimes:png,jpg,jpeg",
        ]);

        $image = request("user_cover_image");
        $image_data = getimagesize($image);
        // dd($image_data);

        $width = $image_data[0];
        $height = $image_data[1];

        if ($width != 1000 && $height != 315) {
            return redirect()->back()->with("msg", "The image width should be in the range of
                1000px and the height of 315px! if not crop the image. Thanks!");
        }else{
            
        $file = request()->file('user_cover_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('cover/', substr($filename, 0, 10).'.'.$secrete_id.'.jpg');

        User::where("id", $user[0]->id)->update(['user_cover_image'=> $filename]);

        Auth::user()->notify(new coverPicNotification);

        return redirect("/profile/$secrete_id");
            
        }
    }
    public function frequest($id)
    {
        $send_id = Auth::user()->id;
        $rec_id = session()->put("id", $id);

        $data['sender_id'] = Auth::user()->id;
        $data['receiver_id'] = $id;
        $data['request_status'] = "pending";
        // $data['created_at'] = Carbon::now();
        // $data['updated_at'] = Carbon::now();
        // dd($data);
        $check = Friend::create($data);

        session()->put("id", $id);

        // $users = User::where("id", $send_id)->orWhere("id", $rec_id)->get();
        // Notification::send($users, new friendRequestNotification);

        return redirect()->back()->with("mssg", "Friend Request sent Successfully!");
    }
    public function canRequest($id)
    {
       Friend::where("id", $id)->delete();

       return redirect()->back()->with("delMsg", "You Cancelled the friend request Successfully!");
    }
    public function conRequest($id)
    {
        Friend::where("id", $id)->update(["request_status" => "accepted"]);
        
        return redirect()->back()->with("req_acc", "You Successfully Accepted the friend Request!");
    }
}
