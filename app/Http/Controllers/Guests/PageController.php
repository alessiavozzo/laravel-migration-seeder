<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()    {
        
        $trains = Train::all();
        return view('guests.trains.index', compact('trains'));
    }

    public function show($trainId)
    {

        $train= Train::findOrFail($trainId);
        return view('guests.trains.show', compact('train'));
    }

}
