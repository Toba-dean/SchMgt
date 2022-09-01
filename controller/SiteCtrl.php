<?php

namespace app\controller;

use app\core\Controller;
use app\model\UserModel;

class SiteCtrl extends Controller
{
  public function home()
  {
    $user = new UserModel;
    // $data = $user::findOne(['first_name' => 'Toba'], 'users');
    // $user->update(1, ["first_name" => "Jackie", "last_name" => "Chan", "gender" => 'female']);
    // $user->delete(5);
    $data = $user->findAll();

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
