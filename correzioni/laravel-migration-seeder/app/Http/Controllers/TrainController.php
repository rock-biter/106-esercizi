<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        // $trains = Train::all();
        $trains = Train::where('departure_time', '>', now())->orderBy('departure_time', 'asc')->get();
        // $sql = Train::where('departure_time', '>', now())->orderBy('departure_time', 'asc')->toSql();
        // dd($sql);
        // dd($trains);

        return view('trains.index', compact('trains'));
    }
}
