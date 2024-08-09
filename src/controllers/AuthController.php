<?php
namespace app\controllers;

use app\Application;
use app\Controller;
use app\Request;
use app\models\User;

class AuthController extends Controller
{
    public function login ()
    {
        $this->setLayout('auth');
        return $this->render('login', $x);
    }

    public function register (Request $request)
    {
        $user = new User();
        $errors = [];
        $this->setLayout('auth');
        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success','Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }
        
            return $this->render('register', [
                'model' => $user
            ]);
        }        
        return $this->render('register', [
            'model' => $user
        ]);
    }
}