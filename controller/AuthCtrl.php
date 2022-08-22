<?php

namespace app\controller;

use app\core\Controller;

class AuthCtrl extends Controller
{
  public function login()
  {
    $this->setLayout('auth');
    return  $this->render('login');
  }

  public function register()
  {
    $this->setLayout('auth');
    return  $this->render('signup');
  }
}
