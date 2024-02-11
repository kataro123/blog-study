<?php

namespace App\Libraries;

use CodeIgniter\Email\Email;
use CodeIgniter\HTTP\Message;
use Exception;

use function PHPUnit\Framework\throwException;

class Mail
{

    private Email $email;
    private ?string $template = null;

    public function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {

        $this->email = \Config\Services::email();
        $this->email->initialize(
            [
                'protocol' => $_ENV['PROTOCO'],
                'SMTPHost' => $_ENV['SMTP_HOST'],
                'SMTPUser' => $_ENV['SMTP_USER'],
                'SMTPPass' => $_ENV['SMTP_PASS'],
                'SMTPPort' => $_ENV['SMTP_PORT'],
                'wordWrap' => true,
                'charset' => 'utf-8'
            ]
        );
    }

    public function setFrom(array $from)
    {
        $this->email->setFrom($from['email'], $from['name']);
    }

    public function setTo(string $to)
    {
        $this->email->setTo($to);
    }

    public function setSubject(string $subject)
    {
        $this->email->setSubject($subject);
    }

    public function setTemplate(string $template, array $data)
    {
        $this->template = view($template, $data);
        $this->email->setMessage($this->template);
        $this->email->setMailType('html');
    }

    public function setMessage(string $message)
    {
        if ($this->template) {
            throw new Exception("Você já selecionou um template para enviar o email", 1);
        }
        $this->email->setMessage($message);
        $this->email->setMailType('text');
    }

    public function send()
    {
        return $this->email->send();
    }
}
