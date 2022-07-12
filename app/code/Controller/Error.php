<?php

namespace Controller;

use Core\AbstractController;
use Core\Interfaces\ControllerInterface;
use Helper\Url;
class Error extends AbstractController implements ControllerInterface
{
    public function index()
    {

    }

    public function error404()
    {
        $this->render('parts/errors/error404');
    }
}