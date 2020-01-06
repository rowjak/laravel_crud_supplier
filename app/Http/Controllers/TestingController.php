<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function halo($nama = 'budi')
    {
        return 'halo selamat datang '.$nama;
    }
}
