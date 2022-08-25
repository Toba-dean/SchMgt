<?php

namespace app\model;

use app\core\DBModel;

class RegisterModel extends DBModel
{
  public string $first_name = '';
  public string $last_name = '';
  public string $email = '';
  public string $gender = '';
  public string $rank = '';
  public string $password = '';
  public string $confirm_password = '';

  public static function primaryKey(): string
  {
    return 'id';
  }

  public function labels(): array
  {
    return [
      'first_name' => 'Enter First Name',
      'last_name' => 'Enter Last Name',
      'email' => 'Enter Email',
      'password' => 'Enter Password',
      'confirm_password' => 'Confirm Password',
    ];
  }

  public function tableName(): string
  {
    return 'users';
  }

  public function attributes(): array
  {
    return ["first_name", "last_name", "email", "gender", "rank", "password"];
  }

  public function rules(): array
  {
    return [
      'first_name' => [self::RULES_REQUIRED],
      'last_name' => [self::RULES_REQUIRED],
      'email' => [self::RULES_REQUIRED, self::RULES_EMAIL, [self::RULES_UNIQUE, 'class' => self::class]],
      'gender' => [self::RULES_REQUIRED],
      'rank' => [self::RULES_REQUIRED],
      'password' => [self::RULES_REQUIRED, [self::RULES_MIN_LENGTH, 'min' => 6], [self::RULES_MAX_LENGTH, 'max' => 50]],
      'confirm_password' => [self::RULES_REQUIRED, [self::RULES_MATCH, 'match' => 'password']],
    ];
  }

  function save()
  {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    return parent::insert();
  }
}
