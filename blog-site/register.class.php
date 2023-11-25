<?php

class Registeruser {
  private $username;
  private $password_raw;
  private $password_enc;
  private $storage = "users.json";  
  private $new_user;
  private $stored_users;
  public $success;
  public $error;

  public function __construct($username, $password) {
    $this->username = filter_var(trim($username), FILTER_UNSAFE_RAW);
    $this->password_raw = filter_var(trim($password), FILTER_UNSAFE_RAW);
    $this->password_enc = password_hash($password, PASSWORD_DEFAULT);
    $this->stored_users = json_decode(file_get_contents($this->storage), true);
    $this->new_user = [
      "username" => $this->username,
      "password" => $this->password_enc, 
    ];

    $this->insertUser();
  }

  private function insertUser() {
    array_push($this->stored_users, $this->new_user);
    if (file_put_contents($this->storage, json_encode($this->stored_users))) {
      return $this->success = "Your registration was successful";
    } else {
      return $this->error = "Somethig went wrong, please try again";
    }
  }
}
