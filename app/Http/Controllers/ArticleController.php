<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Article;
use Request;

class ArticleController extends Controller {

public function index()
{
	$article=Article::latest('published_at')->get();

	return view(('article.index'),compact('article'));
	//
}

public function show($id)
{
	$article=Article::find($id);
	return view(('article.show'),compact('article'));
}

public function create()
{
	return view('article.create');
}

public function store()
{

		$input=Request::all();
		$input['published_at']=Carbon::now();
		Article::create($input);
		return redirect ('article');
	
}

}


















