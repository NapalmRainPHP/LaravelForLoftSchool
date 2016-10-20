<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
	use RegistersUsers;
	protected $redirectTo = '/';

	public function __construct() {
        $this->middleware('guest');
    }


    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data) {
    	$admin = 0;
    	if (isset($data['admin'])) {
			$admin = 1;
		}
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
			'IsAdmin' => $admin,
            'password' => bcrypt($data['password'])
        ]);
    }
}
