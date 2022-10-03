<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D {
  public $alas;
  public $tinggi;
  
  public function __construct($alas, $tinggi) {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }
  
  public function namaBidang() {
    $namaBidang = 'Segitiga Siku-siku';
    return $namaBidang;
  }

  public function luasBidang() {
    $luasBidang = $this->alas * $this->tinggi / 2;
    return $luasBidang;
  }
  
  public function kelilingBidang() {
    $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
    $kelilingBidang = $this->alas + $this->tinggi + $sisiMiring;
    return $kelilingBidang;
  }
}