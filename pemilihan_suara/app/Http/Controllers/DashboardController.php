<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $response = "data a";
        // return view('dashboard', [
        //     "data" => $response
        // ]);
        // $response = "data a";
        $sendy = "video";
        $reza = "photo";
        return view('dashboard', [
            "agung" => $sendy,
            "khoir" => $reza,
        ]);
        // return "dashboard";
    }

    public function edit()
    {
        return view('edit');
    }
}
