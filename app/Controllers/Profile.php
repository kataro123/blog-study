<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Profile extends BaseController
{
    public function index()
    {
        return view('profile');
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            $data = json_decode(file_get_contents('php://input'), true);

            $validated = $this->validate([
                'id'        => 'required',
                'firstName' => 'required',
                'lastName'  => 'required',
                'email'     => 'required|valid_email|is_unique[users.email,id,{id}]'
            ], [
                'id' => [
                    'required' => 'O id é requerido'
                ],
                'firstName' => [
                    'required' => 'Informe um nome para ser alterado'
                ],
                'lastName' => [
                    'required' => 'Informe um sobrenome para ser alterado'
                ],
                'email' => [
                    'required' => 'Informe um email para ser alterado',
                    'valid_email' => 'Informe um Email válido para ser alterado',
                    'is_unique' => 'Esse email já está em uso'
                ]
            ]);

            if (!$validated) {
                return $this->response->setJSON(['validate' => $this->validator->getErrors()])->setStatusCode(401);
            }

            if ($data['id'] !== session()->get('user')->id) {
                return $this->response->setJSON(['error' => 'Você não pode alterar perfil de outros usuários, malandro.'])->setStatusCode(401);
            }

            if ((new User())->save($data)) {
                $_SESSION['user']->firstName = $data['firstName'];
                $_SESSION['user']->lastName = $data['lastName'];
                $_SESSION['user']->email = $data['email'];
                $_SESSION['user']->fullName = $data['firstName'] . ' ' . $data['lastName'];
                return $this->response->setJSON(['message' => 'Seu perfil foi atualizado com sucesso!'])->setStatusCode(200);
            }
            return $this->response->setJSON(['error' => 'Ocorreu um erro ao atualizar seu perfil.'])->setStatusCode(400);
        }
    }

    public function updatePassword()
    {

        if ($this->request->isAJAX()) {
            $data = json_decode(file_get_contents('php://input'), true);

            $validated = $this->validate(
                [
                    'id' => 'required',
                    'password' => 'required',
                    'newPassword' => 'required',
                    'confirmNewPassword' => 'required|matches[newPassword]'
                ],
                [
                    'id' => [
                        'required' => 'Você não pode apagar o campo oculto contendo seu ID'
                    ],
                    'password' => [
                        'required' => 'Você deve informar sua senha atual.'
                    ],
                    'newPassword' => [
                        'required' => 'Você deve informar sua nova senha'
                    ],
                    'confirmNewPassword' => [
                        'required'  => 'Você deve confirmar a sua nova senha',
                        'matches'     => 'A confirmação da nova senha precisa ser a mesma que a nova senha'
                    ]
                ]
            );

            if (!$validated) {
                return $this->response->setJSON(['validate' => $this->validator->getErrors()])->setStatusCode(401);
            }

            if ($data['id'] !== session()->get('user')->id) {
                return $this->response->setJSON(['error' => 'Você não pode mudar esse usuário'])->setStatusCode(401);
            }

            $user = new User();
            $userFound = $user->find($data['id']);

            if (!password_verify($data['password'], $userFound->password)) {
                return $this->response->setJSON(['error' => 'Senha Incorreta'])->setStatusCode(401);
            }

            if ($data['password'] === $data['newPassword']) {
                return $this->response->setJSON(['error' => 'Sua nova senha deve ser diferente da sua senha atual'])->setStatusCode(401);
            }

            if ($user->save([
                'id' => $data['id'],
                'password' => password_hash($data['newPassword'], PASSWORD_DEFAULT)
            ])) {
                return $this->response->setJSON(['success' => 'Sua senha foi alterada com sucesso!'])->setStatusCode(200);
            }

            return $this->response->setJSON(['error' => 'Ocorreu um erro ao atualizar sua senha.'])->setStatusCode(401);
        }
    }

    public function updateAvatar()
    {

        if ($this->request->isAJAX()) {

            $data = $this->request->getGetPost();
            $img = $this->request->getFile('file');

            if (session()->get('user')->id !== $data['id']) {
                return $this->response->setJSON(['error' => 'Você não pode alterar informações de outras contas'])->setStatusCode(401);
            }

            $user = new User();
            $userFound = $user->find($data['id']);

            if ($userFound->image !== null) {
                $path = FCPATH . $userFound->image;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            // uniqid() -> retorna um id unico | Ou seja, e bom para criar arquivos que nao vao repetir nome
            $imageName = uniqid() . '.' . $img->getExtension();

            $savePath = 'assets/avatar/' . $imageName;

            $uploaded = \Config\Services::image('gd')->withFile($img)->resize(640, 480, true)->save($savePath);

            if ($uploaded && $user->save([
                'id' => $data['id'],
                'image' => $savePath
            ])) {

                $_SESSION['user']->avatar = $savePath;
                return $this->response->setJSON(['successAvatar' => 'Sua foto do perfil foi atualizada com sucesso'])->setStatusCode(200);
            }
            return $this->response->setJSON(['error' => 'Ocorreu um erro ao enviar sua imagem'])->setStatusCode(401);
        }
    }
}
