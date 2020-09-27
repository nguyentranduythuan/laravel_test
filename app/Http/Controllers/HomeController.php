<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$title = 'This is a page home';
    	$bodyHomePage = 'This is Body Home Page';
    	$data = compact(
    		'title',
    		'bodyHomePage'
    	);
    	return view('home.index', $data);
    }
}
