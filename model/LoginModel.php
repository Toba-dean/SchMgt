<?php

namespace app\model;

use app\core\Model;

class LoginModel extends Model
{
  public string $email = '';
  public string $password = '';

  public function tableName(): string
  {
    return 'users';
  }

  public function attributes(): array
  {
    return ["email", "password"];
  }

  public function rules(): array
  {
    return [
      'email' => [self::RULES_REQUIRED, self::RULES_EMAIL],
      'password' => [self::RULES_REQUIRED],
    ];
  }

  function login()
  {
    return true;
  }
}
