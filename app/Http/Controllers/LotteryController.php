<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\Batch;
use App\Models\Payment;

class LotteryController extends Controller
{
    public function index()
    {
        $lotteries = Lottery::all();
        $batches = Batch::all();
        $payments = Payment::all();
        return view ('test.pages.lottery.index', 
            [
                'batches' => $batches,
                'payments' => $payments,
                'lotteries' => $lotteries
            ]);
    }

    public function create()
    {
        $batches = Batch::all();
        $payments = Payment::all();
        return view ('test.pages.lottery.create', 
            [
                'batches' => $batches,
                'payments' => $payments,
            ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Lottery::create($input);
        return redirect('/lottery')->with('flash_message', 'Lottery Added!');  
    }


}
