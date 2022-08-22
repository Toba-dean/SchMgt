<?php

namespace app\controller;

use app\core\Controller;

class SiteCtrl extends Controller
{
  public function home()
  {
    return $this->render('home', [
      "name" => "Dean"
    ]);
  }

  public function profile()
  {
    return $this->render('profile', [
      "name" => "Dean"
    ]);
  }
}
