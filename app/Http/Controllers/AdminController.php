<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //baris yg ditambahkan untuk auth

class AdminController extends Controller
{
    function index(){
        echo 'Selamat Datang';
        echo '<h1>'. Auth::user()->user .'</h1>';
        echo "<br><a href='logout'>logout</a>";
    }
}
