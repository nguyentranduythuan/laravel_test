<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$title = 'This is a page home';
    	$bodyHomePage = 'This is Body Home Page';

        $listSoChan = [];
        for ($i=1; $i <= 100 ; $i++) { 
            if($i % 2 == 0) {
                $listSoChan []= $i;
            }
        }

        $data = compact(
            'title',
            'bodyHomePage',
            'listSoChan'
        );

    	return view('home.index', $data);
    }
}
