<?php

class Akun{
  private $username;
  private $password;
  private $email;

  public function __construct($username, $password, $email)
  {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
}

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
  function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }
  function viewAkun() {
      #menampilkan semua data tentang user nama,email,password
  }
  function updateAkun(){
      #melakukan update akun yaitu email,nama dan juga password pada database
  }
  function deleteAkun(){
      #melakukan penghapusan data akun pada database 
  }
  
}
Akun(viewAkun); #melakukan pemanggilan fungsi View akun pada calss Akun 
Akun(UpdateAkun); #melakukan pemanggilan fungsi View akun pada calss Akun 
Akun(deleteAkun); # melakukan pemanggilan fungsi delete akun
?>