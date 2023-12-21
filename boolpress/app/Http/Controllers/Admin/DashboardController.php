<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // recupero tutti i dati da mostrare nella dashboard

        return view('admin.dashboard');
    }
}
