<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class HomeController extends Controller{
  public function index() {
    $data = [
      'slogan' => 'L\'abito a volte fa il monaco!',
      'author' => 'Pluto - Founder @BoolShop'
    ];
    return view('home', $data);
  }

  public function shop() {
    $data_shop = Dress::all();
    $data = [
      'items' => $data_shop
    ];
    return view('shop', $data);
  }

  public function contact() {
    $data = [
      'tel' => '+39 366 1234567',
      'email' => 'Pluto@BoolShop.it'
    ];
    return view('contact', $data);
  }
}
