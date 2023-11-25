<?php
class LoginUser {

  private $username;
  private $password;
  private $storage = "users.json";
  private $sotred_users;
  public $error;
  public $success;


  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
    $this->stored_users = json_decode(file_get_contents($this->storage), true);
    $this->login();
  }

  private function login() {
    foreach($this->stored_users as $user) {
      if ($user['username'] == $this->username) {
        if (password_verify($this->password, $user['pasword'])) {

          return $this->success = "You are logged in";
        } 
      }
    }

    return $this->error = "Wrong username or password";
  }
}


?>
