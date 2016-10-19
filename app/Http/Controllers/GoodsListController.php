<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Http\Requests;

class GoodsListController extends Controller {
	public function index() {
		$glist = Good::all();

		return view('goodslist', ['list' => $glist]);
	}
}
