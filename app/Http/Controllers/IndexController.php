<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller {
    public function index() {
    	$g = Good::all();
		return view('index', ['goods'=>$g]);
	}
}
