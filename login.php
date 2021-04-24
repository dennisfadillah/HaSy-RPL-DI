<?php
class Login extends Akun{
  private $username;
  private $password;

  public function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }
 

  // Methods
  function set_username($username) {
    $this->username = $username;
  }
  function get_username() {
    return $this->username;
  }
  function set_password($password) {
    $this->password = $password;
  }
  function get_password() {
    return $this->password;
  }
  function masuk() {
      #melakukan proses pengecekan username ddengan password pada database
  }
}

Login(masuk) #pemanggilan fungsi masuk pada class login yang di extend dari kelas Akun

?>

