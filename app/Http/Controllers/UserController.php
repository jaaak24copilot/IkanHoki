<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function deviceMonitoring()
    {
        return view('device_monitoring');
    }

    public function index()
    {
        return view('profile');
    }

    public function dataMonitoring()
    {
        return view('data_monitoring');
    }
}
