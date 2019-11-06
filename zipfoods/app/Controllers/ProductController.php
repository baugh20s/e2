<?php
namespace App\Controllers;

class ProductController extends Controller
{
    public function index() {
        return $this->app>view('products');
    }
}