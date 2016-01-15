<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {


	public function about()
	{
		$name='Asna';
		$yr='3rd';
		return view('page.about',compact('name','yr'));

	}

}
