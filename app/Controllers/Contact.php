<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {

        $validated = $this->validate(
            [
                'name' => 'required',
                'email' => 'required|valid_email',
                'subject' => 'required',
                'message' => 'required'
            ],
            [
                'name' => [
                    'required' => 'Você precisa informar seu nome'
                ],
                'email' => [
                    'required' => 'Você precisa infromar seu email',
                    'valid_email' => 'Você precisa informar um email válido'
                ],
                'subject' => [
                    'required' => 'Você precisa informar o assunto da mensagem'
                ],
                'message' => [
                    'required' => 'Você precisa informar a mensagem desejada'
                ]
            ]
        );

        if (!$validated) {
            return redirect()->route('contact')->withInput()->with('errors', $this->validator->getErrors());
        }

        $config = [
            'protocol' => $_ENV['PROTOCO'],
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'SMTPPort' => $_ENV['SMTP_PORT'],
            'wordWrap' => true,
            'mailType' => 'html',
            'charset' => 'utf-8'
        ];

        $email = \Config\Services::email();

        $email->initialize($config);
        $email->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        $email->setTo($_ENV['EMAIL_TO']);

        $template = view('emails/contact', [
            'name' => 'Filipe Arruda',
            'from' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => strip_tags(trim((string)$this->request->getPost('message')))
        ]);

        $email->setSubject($this->request->getPost('subject'));
        $email->setMessage($template);

        ($email->send()) ?
            session()->setFlashdata('contact_sent', 'Email enviado com sucesso, responderemos em no máximo 24h') :
            session()->setFlashdata('contact_not_sent', 'Ocorreu um erro ao enviar o email, tente novamente em alguns segundos');


        return redirect()->route('contact');
    }
}
