<?php

namespace app\model;

use app\core\Model;

class RegisterModel extends Model
{
  public string $first_name = '';
  public string $last_name = '';
  public string $email = '';
  public string $gender = '';
  public string $rank = '';
  public string $password = '';
  public string $confirm_password = '';

  public function tableName(): string
  {
    return 'users';
  }

  public function attributes(): array
  {
    return ["first_name", "last_name", "email", "gender", "rank", "password", "confirm_password"];
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
    return true;
  }
}
