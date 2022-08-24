<?php

namespace app\model;

use app\core\Model;

class UserModel extends Model
{
  public function rules(): array
  {
    return [];
  }

  public function tableName(): string
  {
    return 'users';
  }

  public function attributes(): array
  {
    return ["first_name", "last_name", "email", "gender", "rank", "password", "confirm_password"];
  }
}
