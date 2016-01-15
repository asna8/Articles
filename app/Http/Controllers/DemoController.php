<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Demo;
use App\Http\Controllers\Controller;

use Request;

class DemoController extends Controller {

	public function index()
	{
		$demos=Demo::all();

		return view(('demo.index'),compact('demos'));
	}

	public function show($id)
	{
		$demos=Demo::findOrFail($id);
		//dd($demos);
		/*if(is_null($demos))
		{
			abort(404);
		}*/

		return view(('demo.show'),compact('demos'));
	}
	 
	public function demo()
	 {
		
		$data=[];
		$data['username']='Asna';
		$data['password']='family';
		return view('page.demo',compact('data'));


	 }

	 public function create()
	 {
	 	return view('demo.create');
	 }

	 public function store()
	 {

	 		$input=Request::all();
	 	
	 		return $input;
	 }

	

	

}
