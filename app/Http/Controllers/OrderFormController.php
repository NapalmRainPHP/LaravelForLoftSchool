<?php

namespace App\Http\Controllers;

use App\Good;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use PHPMailer;

class OrderFormController extends Controller {
    public function Send(Request $req) {
		$error = true;
		$errorcode = '';

		$g = Good::find($req->GameID);
		$mess = 'Пользователь '.$req->Name.' ('.$req->email.') сделал заказ на игру <b>'.$g->Title.'</b>';

		$admins = User::where('IsAdmin', 1)->get();

		if (count($admins)>0) {
			$mail = new PHPMailer;
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'forloftphp';                 // SMTP username
			$mail->Password = 'forloftphpPassword';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to

			$mail->setFrom('forloftphp@yandex.ru', 'phpdz10');
			foreach($admins as $admin) {
				$mail->addAddress($admin->email);               // Name is optional
			}
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Возрадуемся';
			$mail->Body    = $mess;
			$mail->AltBody = 'Заказ, ура!';

			if(!$mail->send()) {
				$errorcode = $mail->ErrorInfo;
			} else {
				$error = false;
				$errorcode = 'Вы успешно зарегистрированы. Можете пройти авторизацию';
			}
		} else {
			$errorcode = 'Не найдено ни одного админа';
		}

		echo json_encode(['error'=>$error, 'errorcode'=>$errorcode]);
	}
}
