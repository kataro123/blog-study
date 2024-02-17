<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Mail;
use CodeIgniter\HTTP\ResponseInterface;
use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;

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

        $mail = new Mail;
        $mail->setFrom([
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name')
        ]);
        $mensagemT = strip_tags(trim((string)$this->request->getPost('message')));
        $mail->setTo($_ENV['EMAIL_TO']);
        $mail->setSubject((string)$this->request->getPost('subject'));
        $mail->setTemplate('emails/contact', [
            'name' => 'Filipe Arruda',
            'from' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $mensagemT
        ]);

        if ($mail->send()) {
            session()->setFlashdata('contact_sent', 'Email enviado com sucesso, responderemos em no máximo 24h');
            $basic = new Basic("1fe59666", "5Rk2iTRrloO07dsK");
            $client = new Client($basic);

            $response = $client->sms()->send(
                new SMS('18572370436', '17653090209', "Voce acaba de receber uma mensagem do formulario de contato do seu site.\nNome: {$this->request->getPost('name')} \nemail: {$this->request->getPost('email')} \nSubject: {$this->request->getPost('subject')} \nMensagem: {$mensagemT}", 'unicode')
            );

            $message = $response->current();

            if ($message->getStatus() == 0) {
                return redirect()->route('contact');
            } else {
                echo 'failed with status ' . $message->getStatus();
            }
        } else {
            session()->setFlashdata('contact_not_sent', 'Ocorreu um erro ao enviar o email, tente novamente em alguns segundos');
        }

        // ($mail->send()) ?
        //     session()->setFlashdata('contact_sent', 'Email enviado com sucesso, responderemos em no máximo 24h') :
        //     session()->setFlashdata('contact_not_sent', 'Ocorreu um erro ao enviar o email, tente novamente em alguns segundos');

        return redirect()->route('contact');
    }
}
