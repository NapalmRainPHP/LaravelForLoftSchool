<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPageController extends Controller {
    public function index() {
    	return view('admin.goods');
	}
}
