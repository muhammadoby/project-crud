<?php

namespace App\Http\Controllers\WithAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Dashboard index
     */
    public function index(){
        return view('dashboard');
    }
}
