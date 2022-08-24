<?php

namespace app\controller;

use app\core\Controller;
use app\model\UserModel;

class SiteCtrl extends Controller
{
  public function home()
  {
    $user = new UserModel;
    $data = $user::findOne(['first_name' => 'Toba'], 'users');
    return $this->render('home', [
      "name" => "Dean",
      "data" => $data
    ]);
  }

  public function profile()
  {
    return $this->render('profile', [
      "name" => "Dean"
    ]);
  }
}
