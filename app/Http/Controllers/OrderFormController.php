<?php

namespace App\Http\Controllers;

use App\Good;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class OrderFormController extends Controller {
    public function Send(Request $req) {
		$error = true;
		$errorcode = '';

		$g = Good::find($req->GameID);
		$mess = 'Пользователь '.$req->Name.' ('.$req->email.') сделал заказ на игру '.$g->Title.'';

		$admins = User::where('IsAdmin', 1)->get();

		if (count($admins)>0) {
			foreach($admins as $admin) {
//			Mail::to($request->user())->send(new OrderShipped($order));
				Mail::send('email', array('mess' => $mess), function($message) use ($admin) {
					$message->to($admin->email, 'Админ')->subject('Заказ!');
				});
			}
			$error = false;
		} else {
			$errorcode = 'Не найдено ни одного админа';
		}

		echo json_encode(['error'=>$error, 'errorcode'=>$errorcode]);
	}
}
