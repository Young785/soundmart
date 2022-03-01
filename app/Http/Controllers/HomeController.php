<?php

namespace App\Http\Controllers;

// use App\Models\Investment;
use App\Models\Investment;
use App\Models\Creators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $trend_one = Creators::where("id", "1")->where("status", "approved")->first();
        $trend_two = Creators::where("id", "2")->where("status", "approved")->first();
        $trend_three = Creators::where("id", "3")->where("status", "approved")->first();

        return view("front.index", compact("trend_one","trend_two","trend_three"));
    }
    public function about()
    {
        return view("front.about");
    }
    public function payment()
    {
        return view("front.pay");
    }
    public function contact()
    {
        return view("front.contact");
    }
    public function startProject()
    {
        return view("front.start_project");
    }
    public function listProject()
    {
        $data = request()->validate([
            'fullname' => ['required'],
            'stage_name' => ['required'],
            'year_career_onset' => ['required'],
            'target_amount' => ['required'],
            'method_funding' => ['required'],
            'content_name' => ['required'],
            'royalty_avenues' => ['required'],
            'type_funding' => ['required'],
            'id_card' => ['required'],
            'current_payout' => ['required'],
            'content_others' => ['required'],
            'content_artwork' => ['required'],
            'content_link' => ['required'],
        ]);
        $id = Auth::user()->id;
        $data['user_id']  = $id;
        $data['name_slug']  = Str::slug(request("content_name"));
        $id_card = request()->file('id_card');
        $id_card_extension = $id_card->getClientOriginalExtension();
        $id_cardname = time() . '.' . $id_card_extension;
        $id_card->move('assets/images/documents/', $id_cardname);
        $data['id_card']  = $id_cardname;

        $current = request()->file('current_payout');
        $current_extension = $current->getClientOriginalExtension();
        $current_pay = time() . '.' . $current_extension;
        $current->move('assets/images/documents/', $current_pay);
        $data['current_payout']  = $current_pay;

        $content_others = request()->file('content_others');
        $content_others_extension = $content_others->getClientOriginalExtension();
        $content_others_s = time() . '.' . $content_others_extension;
        $content_others->move('assets/images/documents/', $content_others_s);
        $data['content_others']  = $content_others_s;
        
        $content_artwork = request()->file('content_artwork');
        $content_artwork_extension = $content_artwork->getClientOriginalExtension();
        $content_artwork_s = time() . '.' . $content_artwork_extension;
        $content_artwork->move('assets/images/documents/', $content_artwork_s);
        $data['content_artwork']  = $content_artwork_s  ;
        $data['status']  = "pending";
        
        $insert_creators = Creators::create($data);
        Creators::where("id", $insert_creators->id)->update(["asset_id" => $insert_creators->id]);
        return redirect("/pending-listing");
    }
    public function search()
    {
        $search_term = $_GET['search'];
        $projects = Creators::where("fullname", "like", "%".$search_term."%")
            ->orWhere("stage_name", "like", "%".$search_term."%")
            ->orWhere("distributor_name", "like", "%".$search_term."%")
            ->orWhere("target_amount", "like", "%".$search_term."%")
            ->orWhere("method_funding", "like", "%".$search_term."%")
            ->orWhere("content_name", "like", "%".$search_term."%")
            ->orWhere("royalty_avenues", "like", "%".$search_term."%")
            ->get();
        return view("front.search", compact("projects", "search_term"));
    }
    public function invest()
    {
        $projects = Creators::where("status", "approved")->get();
        return view("front.invest", compact("projects"));
    }
    public function project_view(Request $i, $request)
    {
        $project = Creators::where("name_slug", $request)->where("status", "approved")->first();
        return view("front.project_view", compact("project"));
    }
    public function faq()
    {
        return view("front.faq");
    }
    public function term_condition()
    {
        return view("front.term_condition");
    }
    public function blog()
    {
        return view("front.blog");
    }
    public function how_it_works_creators()
    {
        return view("front.creators");
    }
    public function how_it_works_investors()
    {
        return view("front.investors");
    }
    public function sendEmail()
    {
        $name = request("name");
        $email = request("email");
        $subject = request("subject");
        $details = request("details");
        
        $to = "ayomikunariyo@gmail.com";
        $subject = "Contact Us";

          $message = "<div style='font-family: sans-serif;
            display: block;
            width: 650px;
            margin: auto;
            border-radius: 5px;
            margin-top: 55px;
            box-shadow: rgba(0, 0, 0, 0.15) 2px 3px 35px 0;
            overflow: hidden;'>
            <div style='background: linear-gradient(45deg, #07203c 0%, #491c1c 100%);
            color: #fff;
            font-size: 20px;
            font-weight: 100;
            text-align: center;
            padding: 75px 0;'>
            <b style='display: block;
            margin-bottom: 12px;
            font-size: 32px;'>SOUNDMART</b>
            <p style='color:#fff;'>Contacts Us</p>
            </div>
            <div style='margin:40px 0px 25px 0px'>
              <p style='color:#000;'>Hello Soundmart,</p>
              <strong style='font-size: 15px;'>Name</strong>: $name,
              <p></p> 
              <strong style='font-size: 15px;'>Email</strong>: $email, 
              <p></p>
              <strong style='font-size: 15px;'>Subject</strong>: $subject,
              <p></p>
              <strong style='font-size: 15px;'>Details</strong>: $details
            </div>
          </div>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: Contact Us - Soundmart <hello@soundmart.ng>' . "\r\n";
        $headers .= 'Cc: hello@soundmart.ng' . "\r\n";

        mail($to,$subject,$message,$headers);
        dd("Email Sent");
    }
    public function login()
    {
        return view("front.login");
    }
    public function register()
    {
        return view("front.register");
    }
    public function account()
    {
        $id = Auth::user()->id;
        $projects = Creators::where("user_id", $id)->where("status", "approved")->get();
        return view("front.account", compact("projects"));
    }
    public function pendingList()
    {
        $id = Auth::user()->id;
        $projects = Creators::where("user_id", $id)->where("status", "pending")->get();
        return view("front.pending_list", compact("projects"));
    }
    public function approvedList()
    {
        $id = Auth::user()->id;
        $projects = Creators::where("user_id", $id)->where("status", "approved")->get();
        return view("front.approved_list", compact("projects"));
    }
    public function investments()
    {
        $id = Auth::user()->id;
        $projects = Investment::join("creators", "investments.listing_id", "=", "creators.id")->where("user_id", $id)->get();
        return view("front.investments", compact("projects"));
    }
    public function view_investment(Request $i, $request)
    {
        $id = Auth::user()->id;
        $slug = Creators::where("name_slug", $request)->where("status", "approved")->first();
        if($slug == null){
            abort(404);
        }else{
            $project = Investment::join("creators", "investments.listing_id", "=", "creators.id")->where("creators.id", $slug->id)->first();
            return view("front.view_investment", compact("project"));
        }
    }
}