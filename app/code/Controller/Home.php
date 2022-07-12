<?php

namespace Controller;

use Core\AbstractController;
use Core\Interfaces\ControllerInterface;
use Model\Message;
use Helper\Validator;
use Helper\Url;
class Home extends AbstractController implements ControllerInterface
{

    public function index()
    {
        $this->render('parts/home');
    }

    public function create()
    {
        $isEmailValid = Validator::checkEmail($_POST['email']);
        if ($isEmailValid) {
            $user = new Message();
            $user->setName($_POST['name']);
            $user->setSurname($_POST['surname']);
            $user->setEmail($_POST['email']);
            $user->setMessage($_POST['message']);
            $user->save();
            Url::redirect('');
        } else {
            echo 'Patikrinkite duomenis';
        }
    }


}
