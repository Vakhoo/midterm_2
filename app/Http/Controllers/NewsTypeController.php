<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsType;

class NewsTypeController extends Controller
{
    public function index()
    {
    	return view("news_type.index", ["data"=>NewsType::get()]);
    }

    public function create()
    {
    	return view("news_type.create");
    }

    public function store(Request $req)
    {
    	
        
        NewsType::create([
        "news_type"=>$req->input("news_type")
        ]);

        

    	return redirect()->route("newstypeindex");
    }
    public function show(Request $req)
    {
    	$newstypeshow=NewsType::where("id", $req["id"])->firstOrFail();
    	return view("news_type.edit", ["data"=>$newstypeshow]);

    }

    public function destroy(Request $req)
    {
    	NewsType::where("id", $req->input("id"))->delete();
        return redirect()->back();
    }

    public function update(Request $req)
    {
    	// return $req->input("news_type");
    	NewsType::where("id", $req->input("id"))->update([
            "news_type"=>$req->input("news_type")

    	]);
    	return redirect()->route("newstypeindex");

    }
}
