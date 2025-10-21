<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view(view: 'layout');        
    }
}
