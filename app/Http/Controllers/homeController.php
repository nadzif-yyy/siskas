<?php

namespace App\Http\Controllers;

use App\Models\asrama;
use Illuminate\Http\Request;
use marineusde\LarapexCharts\LarapexChart; 

class homeController extends Controller
{
    public function index(LarapexChart $chart)
    {

        

        $jmlh_anak = asrama::all()->count();
        
        $data = asrama::paginate(5);

        return view('admin.dashboard', compact( 'jmlh_anak', 'data'));

    }

    public function welcome()
    {
        return view('welcome');
    }
}
