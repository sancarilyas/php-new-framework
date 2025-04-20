<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Welcome to Simple MVC',
            'description' => 'This is a simple PHP MVC Framework'
        ];
        $this->view('home/index', $data);
    }

    public function about() {
        $this->view('home/about');
    }
} 