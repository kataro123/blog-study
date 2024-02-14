<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Mail;
use App\Models\Forgot as ModelsForgot;
use App\Models\User;
use CodeIgniter\Entity\Cast\DatetimeCast;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;

class Forgot extends BaseController
{
    public function index()
    {
        return view('forgot');
    }

    public function store()
    {
        $email = $this->request->getPost('email');

        $user = new User();
        $userFound = $user->where('email', $email)->first();

        if (!$userFound) {
            return redirect()->route('forgot')->with('error', 'Email não cadastrado');
        }

        $date = new DateTime();
        $date->modify('+5 minutes');

        $token = md5(uniqid());

        $forgot = new ModelsForgot();
        $forgot->insert([
            'token' => $token,
            'user_id' => $userFound->id,
            'validate' => $date->format('Y-m-d H:i:s')
        ]);

        $mail = new Mail();
        $mail->setFrom([
            'name' => 'Filipe de Araujo',
            'email' => 'filipearrudafaga97@gmail.com'
        ]);
        $mail->setTo((string)$email);
        $mail->setSubject('Reset Password');
        $mail->setTemplate('emails/reset', [
            'name' => $userFound->firstName,
            'token' => $token
        ]);

        ($mail->send()) ?
            session()->setFlashdata('forgot_sent', 'Enviamos por email seu link para resetar sua senha.') :
            session()->setFlashdata('forgot_not_sent', 'Ocorreu um erro ao enviar o email, tente novamente em alguns segundos');

        return redirect()->route('forgot');






        // var_dump($token);
        // echo "<pre>";
        // var_dump($userFound);
        // echo "<pre>";
    }

    public function edit($token)
    {
        if (!$token) {
            return redirect()->route('forgot')->with('token_not_found', 'Token não existe ou não é válido');
        }

        $forgot = new ModelsForgot();
        $forgotFound = $forgot->where('token', $token)->first();

        if (!$forgotFound) {

            return redirect()->route('forgot')->with('token_not_found', 'Token não existe ou não é válido');
        }

        $expiration = new DateTime($forgotFound->validate);
        $now = new DateTime();

        if ($now > $expiration) {

            return redirect()->route('forgot')->with('token_not_found', 'Token não existe ou não é válido');
        }

        return view('reset', ['token' => $token]);
    }

    public function update($token)
    {
        $password = $this->request->getPost('password');

        $forgot = new ModelsForgot();
        $forgotFound = $forgot->where('token', $token)->first();

        if (!$forgotFound) {

            return redirect()->route('forgot')->with('token_not_found', 'Token não existe ou não é válido');
        }

        $expiration = new DateTime($forgotFound->validate);
        $now = new DateTime();

        if ($now > $expiration) {

            return redirect()->route('forgot')->with('token_not_found', 'Token não existe ou não é válido');
        }

        $user = new User();
        $saved = $user->save([
            'id' => $forgotFound->user_id,
            'password' => password_hash((string)$password, PASSWORD_DEFAULT)
        ]);

        ($saved) ?
            session()->setFlashdata('updated', 'Password updated') :
            session()->setFlashdata('not_updated', 'Password not updated');

        return redirect()->route('forgot');
    }
}
