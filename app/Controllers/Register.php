<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Login;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        $validated = $this->validate([
            'firstName' => 'required',
            'lastName'  => 'required',
            'email'     => 'required|valid_email|is_unique[users.email]',
            'password'  => 'required'
        ], [
            'firstName' => [
                'required' => 'Você precisa informar seu primeiro nome'
            ],
            'lastName' => [
                'required' => 'Você precisa informar seu sobrenome'
            ],
            'email' => [
                'required' => 'Você precisa informar um email',
                'valid_email' => 'Você precisa informar um email válido',
                'is_unique' => 'Este email já está em uso'
            ]
        ]);

        if (!$validated) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = new User;

        $userCreated = $user->insert([
            'firstName' => strip_tags((string)$this->request->getPost('firstName')),
            'lastName' => strip_tags((string)$this->request->getPost('lastName')),
            'email' => strip_tags((string)$this->request->getPost('email')),
            'image' => 'https://randomuser.me/api/portraits/lego/5.jpg',
            'password' => strip_tags(password_hash((string)$this->request->getPost('password'), PASSWORD_DEFAULT))
        ]);

        ($userCreated) ?
            session()->setFlashdata('user_created', 'Usuário cadastrado com sucesso') :
            session()->setFlashdata('user_not_created', 'Usuário cadastrado com sucesso');

        $user = $user->find($userCreated);

        Login::login($user);

        return redirect()->route('register');
    }
}
