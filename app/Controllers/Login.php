<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Login as LibrariesLogin;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;
use stdClass;

class Login extends BaseController
{
    public function index()
    {
        // echo '<pre>';
        // var_dump($this->request);
        // echo '<pre>';
        // die();
        if ($this->request->header('Referer')) {
            return view('login', ['page' => $this->request->header('Referer')->getValue()]);
        } else {
            return view('login');
        }
    }

    public function store()
    {
        $backPage = $this->request->getPost('page');

        if ($backPage === '' || strpos((string)$backPage, '/login')) {
            $backPage = 'home';
        }

        $validated = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ], [
            'email' => [
                'required' => 'O campo email é obrigatório',
                'valid_email' => 'O email deve ser válido'
            ],
            'password' => [
                'required' => 'A campo senha é obrigatório'
            ]
        ]);

        if (!$validated) {
            return redirect()->route('login')->with('errors', $this->validator->getErrors());
        }

        $user = (new User)->where('email', $this->request->getPost('email'))->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Email ou senha inválidos');
        }

        if (!password_verify((string)$this->request->getPost('password'), $user->password)) {
            return redirect()->route('login')->with('error', 'Email ou senha inválidos');
        }

        LibrariesLogin::login($user);

        if ($backPage === 'home') {
            return redirect()->route($backPage);
        }
        return redirect()->to((string) $backPage);
    }

    public function logout()
    {
        session()->remove('user');
        session()->remove('auth');
        $backPage = (string) ($this->request->header('Referer')->getValue());

        return redirect()->to($backPage);
    }
}
