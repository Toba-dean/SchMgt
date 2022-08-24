<?php

namespace app\controller;

use app\core\Controller;
use app\model\UserModel;

class SiteCtrl extends Controller
{
  public function home()
  {
    $user = new UserModel;
    $data = $user->findAll();
    // echo "<pre>";
    // var_dump($user, $data);
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
