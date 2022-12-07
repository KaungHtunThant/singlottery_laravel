<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\Result;
use App\Models\Prize;

class PagesController extends Controller
{
    public function index()
    {
        $results = Result::all();
        $prizes = Prize::all();
        return view ('test.pages.index', 
            [
                'results' => $results,
                'prizes' => $prizes
            ]);
    }
}
