<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comments;
use App\NewsType;

class CustomerController extends Controller
{
	public function index_article($id)
	{
		$news=News::with("comments")->where("id",$id)->firstOrFail();
		// return $news;
		// return NewsType::with("news")->where("id",$news->news_type_id)->get();
		return view("viewarticle", [
			"data"=>$news,
			"simular_news"=>NewsType::with("news")->where("id",$news->news_type_id)->get()
		]);
	}

	public function index()
	{
		return view("index", [
			"data"=>Newstype::with("news")->get(),
		]);
	}

	public function comment(Request $req)
	{

		Comments::create([
			"comment"=>$req->input("comment"),
			"user_name"=>$req->input("user_name"),
			"article_id"=>$req->input("article_id")

		]);

		return redirect()->back();
	}


	public function search(Request $req)
	{

		$search_text=$req->input("stext");
		$articles = News::where('title', 'LIKE', '%'.$search_text.'%')->get();
		// return $articles;
		return view("viewsearch", ["data"=>$articles]);

	}

	

}
