<?php
namespace app\controllers;

use app\Controller;
use app\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login ()
    {
        $this->setLayout('auth');
        return $this->render('login', $x);
    }

    public function register (Request $request)
    {
        $registerModel = new RegisterModel();
        $errors = [];
        $this->setLayout('auth');
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register())
                return 'success';
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}