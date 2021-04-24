<?php
class pembayaran{
  private $IdPembayaran;
  private $totaHarga;
  private $metode;


  public function __construct($IdPembaran, $totalHarga, $metode)
  {
    $this->IdPembaran = $IdPembaran;
    $this->totalHarga = $totalHarga;
    $this->metode = $metode;

    }

  // Methods
  function set_IdPembayaran($IdPembayaran) {
    $this->IdPembayaran = $IdPembayaran;
  }
  function get_IdPembayaran() {
    return $this->IdPembayaran;
  }
  function set_totaHarga($totaHarga) {
    $this->totaHarga = $totaHarga;
  }
  function get_totaHarga() {
    return $this->totaHarga;
  }
  function set_metode($metode) {
    $this->metode = $metode;
  }
  function get_metode() {
    return $this->metode;
  }
  function Bayar(){
      # melakukan proses Bayar  
  }
  function totalbelanja(){
      # melakukan perhitungan terhadap total belanja yang akan di assign pada variabel total harga 
  }
  
}
Pembayaran(Bayar); #pemanggilan fungsi masuk pada class login yang di extend dari kelas Akun
Pembayaran(totalbelanja); #pemanggilan fungsi total belanja 
?>
