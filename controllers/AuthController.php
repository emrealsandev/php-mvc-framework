<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $m_register = new RegisterModel();
        if ($request->isPost()) {
            $m_register->loadData($request->getBody());

            echo '<pre>';
            var_dump($m_register);
            echo '</pre>';
            exit;

            if ($m_register->validate() && $m_register->register()) {
                return 'Success';
            }

            return $this->render('register',[
                'model' => $m_register,
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $m_register,
        ]);
    }
}
