<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lottery;
use App\Models\Batch;
use App\Models\Payment;
use App\Models\Result;
use App\Models\Prize;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        $prizes = Prize::all();
        return view ('test.pages.result.index', 
            [
                'results' => $results,
                'prizes' => $prizes
            ]);
    }

    public function create()
    {
        return view ('test.pages.result.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Result::create($input);
        return redirect('/result')->with('flash_message', 'Result Added!');  
    }
}
