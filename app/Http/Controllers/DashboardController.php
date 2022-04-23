<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        echo "saya halaman dashboard";


        echo "<h1> ini adlah coding kedua saya pada dashboard</h1>";
        echo "<p>harapannya tercatatan coding pertama dan kedua ini</p>";
    }
}
