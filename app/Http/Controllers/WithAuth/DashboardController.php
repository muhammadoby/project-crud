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
        // buat ucapan berdasarkan waktu
        $hour = date('H');
        if($hour >= 5 && $hour <= 11){
            $greeting = 'Selamat Pagi';
        } else if($hour >= 12 && $hour <= 14){
            $greeting = 'Selamat Siang';
        } else if($hour >= 15 && $hour <= 18){
            $greeting = 'Selamat Sore';
        } else {
            $greeting = 'Selamat Malam';
        }
        return view('dashboard', [
            'greeting' => $greeting
        ]);
    }
}
