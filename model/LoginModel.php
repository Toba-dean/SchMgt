<?php

namespace app\model;

use app\core\Application;
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

  public function labels(): array
  {
    return [
      'email' => 'Enter Email',
      'password' => 'Enter Password',
    ];
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
    $user = RegisterModel::findOne(['email' => $this->email], 'users');

    if (!$user) {
      $this->addError('email', "No user found with this email address.");
      return false;
    }
    if (!password_verify($this->password, $user->password)) {
      $this->addError('password', "Incorrect Password.");
      return false;
    }

    return Application::$app->login($user);
  }
}
