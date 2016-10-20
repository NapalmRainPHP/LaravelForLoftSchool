<?php

namespace App\Http\Controllers;

use App\GoodsCategory;
use Illuminate\Http\Request;
use App\Good;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class GoodsListController extends Controller {
	public function index($id=NULL) {
		if ($id<>null) {
			$g = Good::find($id);
			$c = GoodsCategory::find($g->CategoryID);
			$u = NULL;
			if (Auth::user()) {
				$u = Auth::user()->email;
			}
			return view('goodslist', ['game' => $g, 'category'=>$c->Title, 'email'=>$u]);
		} else {
			$glist = Good::all();
			return view('goodslist', ['goods' => $glist]);
		}
	}
}
