<?php
namespace app\controllers;

use app\Controller;
use app\Request;

class AuthController extends Controller
{
    public function login ()
    {
        $this->setLayout('auth');
        return $this->render('login', $x);
    }

    public function register (Request $request)
    {
        $this->setLayout('auth');
        if ($request->isPost())
            return 'Handle subbmitted data';
        return $this->render('register', $x);
    }
}