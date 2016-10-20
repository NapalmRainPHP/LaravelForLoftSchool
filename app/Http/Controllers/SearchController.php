<?php

namespace App\Http\Controllers;

use App\Good;
use App\GoodsCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller {
    public function SearchCat($CatName) {
    	$c = GoodsCategory::where('Title', $CatName)->first();

		$glist = Good::where('CategoryID', $c->id)->get();
		//dd($glist);
		return view('search', ['list'=>$glist]);
	}
	public function SearchString($SearchString) {
		$glist = Good::where('Title', 'like', '%'.$SearchString.'%')->orWhere('Title', 'like', '%'.$SearchString.'%')->get();

		return view('search', ['list'=>$glist]);
	}
}
