<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D {
  public $jari2;
  
  public function __construct($jari2) {
    $this->jari2 = $jari2;
  }
  
  public function namaBidang() {
    $namaBidang = 'Lingkaran';
    return $namaBidang;
  }

  public function luasBidang() {
    $luasBidang = 3.14 * pow($this->jari2, 2);
    return $luasBidang;
  }
  
  public function kelilingBidang() {
    $kelilingBidang = 3.14 * ($this->jari2 * 2);
    return $kelilingBidang;
  }
}