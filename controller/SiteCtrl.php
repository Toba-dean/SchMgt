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
}
