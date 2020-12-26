<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $this->middleware("CheckAdmin");
    }
    
    public function index()
    {
        // $user_id=Auth::user()["id"];
        // return User::with("isadmin")->where("id", Auth::user()["id"])->get()[0]["isadmin"]["is_admin"];

    	return view("news.index", ["data"=>News::get()]);
    }

    public function create()
    {
    	return view("news.create");
    }

    public function store(Request $req)
    {
    	
        if (Input::file("image")) {
            $dest=public_path("gallery");
            $filename=$req->input("img-name").".jpg";
            $img=Input::file("image")->move($dest, $filename);

            News::create([
            "title"=>$req->input("title"),
            "info"=>$req->input("info"),
            "img_name"=>$req->input("img-name"),
            "news_type_id"=>$req->input("news_type_id")
            ]);
        }else{
            News::create([
            "title"=>$req->input("title"),
            "info"=>$req->input("info"),
            "news_type_id"=>$req->input("news_type_id")
            ]);

        }

    	return redirect()->route("adminindex");
    }
    public function show(Request $req)
    {
    	$newsshow=News::where("id", $req["id"])->firstOrFail();
    	return view("news.edit", ["data"=>$newsshow]);

    }

    public function destroy(Request $req)
    {
    	News::where("id", $req->input("id"))->delete();
        return redirect()->back();
    }

    public function update(Request $req)
    {
    	News::where("id", $req->input("id"))->update([
    		"title"=>$req->input("title"),
    		"info"=>$req->input("info"),
            "img_name"=>$req->input("img-name")

    	]);
    	return redirect()->route("adminindex");

    }
}
