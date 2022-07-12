<?php

namespace Controller;


use Core\AbstractController;
use Core\Interfaces\ControllerInterface;
use Model\Message;
use Helper\Url;

class Records extends AbstractController implements ControllerInterface
{
    public function index()
    {
        $this->data['messages'] = Message::getAllMessages();
        $this->render('message/all');
    }

    public function show($id)
    {
        $msg = new Message();
        $msg->load($id);
        $this->data['message'] = $msg;
        $this->render('message/show');

    }

    public function delete($id)
    {
        $msg = new Message();
        if ($msg->load($id)) {
            $msg->delete();
            Url::redirect('records');
        } else {
            $error = new Error();
            $error->error404();
        }
    }
}
