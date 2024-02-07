<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Comment as ModelsComment;
use CodeIgniter\HTTP\ResponseInterface;

class Comment extends BaseController
{
    public function store()
    {

        $validated = $this->validate(
            [
                'comment' => 'required'
            ],
            [
                'comment' => [
                    'required' => 'Você precisa escrever seu comentário!'
                ]
            ]
        );

        if (!$validated) {
            return redirect()->back()->with('errorMessage', $this->validator->getErrors());
        }

        $created = (new ModelsComment())->insert([
            'user_id' => session()->get('user')->id,
            'post_id' => $this->request->getPost('post_id'),
            'comment' => strip_tags(trim((string)$this->request->getPost('comment')))
        ]);

        ($created) ?
            session()->setFlashdata('created', 'Comentário cadastrado com sucesso!') :
            session()->setFlashdata('not_created', 'Ocorreu um erro ao cadastrar o comentario!');

        return redirect()->back();
    }
}
