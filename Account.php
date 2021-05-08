<?php
/**
* Class ini mengatur pengolahan data akun yang digunakan pada aplikasi.
* File kode ini berisikan method yang digunakan untuk menyimpan dan mengambil
* parameter akun yang digunakan pada aplikasi.
*
* Merujuk pada use case view akun halaman 27 dan use case update akun halaman 42.
*
* @param username nama yang digunakan oleh pengguna pada aplikasi
* @param password kata kunci rahasia yang hanya diketahui oleh pengguna terkait
* @param email    email pengguna yang digunakan untuk mendaftarkan akun
*/
class Akun{
  private $username;
  private $password;
  private $email;

  /**
  * Fungsi ini digunakan untuk melakukan inisialisasi nilai variabel akun
  * pengguna.
  *
  * @param username nama yang digunakan oleh pengguna pada aplikasi.
  * @param password kata kunci rahasia yang hanya diketahui oleh pengguna terkait
  * @param email    email pengguna yang digunakan untuk mendaftarkan akun
  */
  public function __construct($username, $password, $email)
  {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
}

  /**
  * Fungsi ini digunakan untuk menyimpan nama pengguna pada variabel username.
  *
  * @param username nama yang digunakan oleh pengguna pada aplikasi.
  */
  function set_username($username) {
    $this->username = $username;
  }

  /**
  * Fungsi ini digunakan untuk mengambil nama pengguna yang tersimpan pada
  * variabel username.
  *
  * @return username nama yang digunakan oleh pengguna pada aplikasi.
  */
  function get_username() {
    return $this->username;
  }

  /**
  * Fungsi ini digunakan untuk menyimpan kata sandi pengguna pada variabel
  * password.
  *
  * @param password kata kunci rahasia yang hanya diketahui oleh pengguna terkait
  */
  function set_password($password) {
    $this->password = $password;
  }

  /**
  * Fungsi ini digunakan untuk mengambil kata sandi rahasia yang tersimpan pada
  * variabel password.
  *
  * @param password kata kunci rahasia yang hanya diketahui oleh pengguna terkait
  */
  function get_password() {
    return $this->password;
  }

  /**
  * Fungsi ini digunakan untuk menyimpan email pengguna pada variabel username.
  *
  * @param email    email pengguna yang digunakan untuk mendaftarkan akun
  */
  function set_email($email) {
    $this->email = $email;
  }

  /**
  * Fungsi ini digunakan untuk mengambil email pengguna yang tersimpan pada
  * variabel email.
  *
  * @param email    email pengguna yang digunakan untuk mendaftarkan akun
  */
  function get_email() {
    return $this->email;
  }

  /**
  * Fungsi ini digunakan untuk menampilkan data akun pengguna yang tersimpan pada
  * variabel akun.
  *
  * @return seluruh data akun yang tersimpan pada variabel username, password dan email.
  */
  function viewAkun() {
      #menampilkan semua data tentang user nama,email,password
  }

  /**
  * Fungsi ini digunakan untuk memperbaharui nilai variabel akun pengguna.
  */
  function updateAkun(){
      #melakukan update akun yaitu email,nama dan juga password pada database
  }

  /**
  * Fungsi ini digunakan untuk menghapus data pengguna.
  */
  function deleteAkun(){
      #melakukan penghapusan data akun pada database
  }

}
Akun(viewAkun); #melakukan pemanggilan fungsi View akun pada calss Akun
Akun(UpdateAkun); #melakukan pemanggilan fungsi View akun pada calss Akun
Akun(deleteAkun); # melakukan pemanggilan fungsi delete akun
?>
