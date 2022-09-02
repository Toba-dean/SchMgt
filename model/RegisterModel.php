<?php

namespace app\model;

use app\core\Application;
use app\core\UserName;

class RegisterModel extends UserName
{
  public string $first_name = '';
  public string $last_name = '';
  public string $email = '';
  public string $gender = '';
  public string $rank = '';
  public string $password = '';
  public string $confirm_password = '';

  protected $beforeInsert = [
    'make_user_id',
    'make_school_id',
    'hash_password'
  ];

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
    return [
      "first_name", "last_name",
      "email", "gender", "rank",
      "password", "user_id", "school_id"
    ];
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

  public function make_user_id()
  {
  }

  public function make_school_id()
  {
  }

  public function randomString($n)
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $str .= $characters[$index];
    }

    return $str;
  }

  function save()
  {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    $this->user_id = $this->randomString(20);
    $this->school_id = '';
    return parent::createUser();
  }

  public function getDisplayName(): string
  {
    return  $this->first_name;
  }
}
