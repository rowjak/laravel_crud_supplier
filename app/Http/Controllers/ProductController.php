<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function all()
    {
        return 'ini adalah halaman all';
    }

    function shirt()
    {
        return 'ini adalah halaman product shirt';
    }

    function latest()
    {
        return 'ini adalah halaman product latest';
    }

    function popular()
    {
        return 'ini adalah halaman product popular';
    }
}
