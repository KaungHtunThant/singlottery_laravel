<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lottery;
use App\Models\Batch;
use App\Models\Payment;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        return view ('test.pages.result.index', 
            [
                'results' => $results
            ]);
    }

    public function create()
    {
        return view ('test.pages.result.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Lottery::create($input);
        return redirect('/lottery')->with('flash_message', 'Lottery Added!');  
    }
}
