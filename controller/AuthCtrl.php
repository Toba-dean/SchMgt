<?php

namespace app\controller;

use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\model\LoginModel;
use app\model\RegisterModel;

class AuthCtrl extends Controller
{
  public function login($params, Request $request, Response $response)
  {
    $this->setLayout('auth');
    $logUser = new LoginModel();

    if ($request->isPost()) {
      $logUser->loadData($request->getBody());

      if ($logUser->validate() && $logUser->login()) {
        // $response->redirect('/');
        echo "Success";
        // exit;
      }
      echo "<pre>";
      var_dump($logUser->errors);
      exit;
    }
    return  $this->render('login');
  }

  public function register($params, Request $request, Response $response)
  {
    $this->setLayout('auth');
    $registerUser = new RegisterModel();

    if ($request->isPost()) {
      $registerUser->loadData($request->getBody());

      if ($registerUser->validate() && $registerUser->save()) {
        // $response->redirect('/');
        echo "Success";
        // exit;
      }
      echo "<pre>";
      var_dump($registerUser->errors);
      exit;
    }
    return  $this->render('signup');
  }
}
