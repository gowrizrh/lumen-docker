<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return 'Lumen!';
    }

    /**
     * Displays xdebug configuration information
     * 
     */
    public function xdebug()
    {
        xdebug_info();
    }

    /**
     * Displays php configuration information
     */
    public function phpinfo()
    {
        phpinfo();
    }
}
