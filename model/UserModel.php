<?php

namespace app\model;

use app\core\DBModel;

class UserModel extends DBModel
{
  public function rules(): array
  {
    return [];
  }

  public static function primaryKey(): string
  {
    return 'id';
  }

  public function tableName(): string
  {
    return 'users';
  }

  public function attributes(): array
  {
    return ["first_name", "last_name", "email", "gender", "rank"];
  }
}
