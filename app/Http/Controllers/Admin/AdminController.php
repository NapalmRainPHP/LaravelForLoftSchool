<?php

namespace App\Http\Controllers\Admin;

use App\GoodsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPageController extends Controller {
    public function index() {
    	return view('admin.goods');
	}
	public function newGood() {
		$cats = GoodsCategory::all();
		return view('admin.newgood', ['catlist'=>$cats]);
	}
	public function GoodStore(Request $req) {

	}
	public function AddCat() {
		return view('admin.addcat');
	}
	public function CatStore(Request $req) {
		$cat = new GoodsCategory();
		$cat->Title = $req->Name;
		$cat->Description = $req->Description;
		$cat->save();
		return redirect('/admin/goods/addcategory');
		//
	}
}
