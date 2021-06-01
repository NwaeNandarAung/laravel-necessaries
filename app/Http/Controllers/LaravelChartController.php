<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\LineChart;

class LaravelChartController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laravel_chart');
    }
}
