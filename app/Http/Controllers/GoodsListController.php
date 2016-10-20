<?php

namespace App\Http\Controllers;

use App\GoodsCategory;
use Illuminate\Http\Request;
use App\Good;
use App\Http\Requests;

class GoodsListController extends Controller {
	public function index($id=NULL) {
		if ($id<>null) {
			$g = Good::find($id);
			$c = GoodsCategory::find($g->CategoryID);
			return view('goodslist', ['game' => $g, 'category'=>$c->Title]);
		} else {
			$glist = Good::all();
			return view('goodslist', ['goods' => $glist]);
		}
	}
}
