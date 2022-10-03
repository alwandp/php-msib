<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D {
  public $panjang;
  public $lebar;
  
  public function __construct($panjang, $lebar) {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }
  
  public function namaBidang() {
    $namaBidang = 'Persegi Panjang';
    return $namaBidang;
  }

  public function luasBidang() {
    $luasBidang = $this->panjang * $this->lebar;
    return $luasBidang;
  }
  
  public function kelilingBidang() {
    $kelilingBidang = 2 * ($this->panjang + $this->lebar);
    return $kelilingBidang;
  }
}