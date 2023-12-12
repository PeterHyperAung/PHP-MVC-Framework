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
        return $this->render('auth/login');
    }


    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if($request->isPost()) {
                $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }
        }


        $this->setLayout('auth');
        return $this->render('auth/register', [
            'model' => $registerModel
        ]);
    }
}   

?>