<?php

namespace app\model;

use app\core\Model;

class UserModel extends Model
{
  public function tableName(): string
  {
    return 'users';
  }
}
