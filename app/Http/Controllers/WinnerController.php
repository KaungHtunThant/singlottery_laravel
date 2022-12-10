<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\Batch;
use App\Models\Payment;

class WinnerController extends Controller
{
    public function index()
    {
        $lotteries = Lottery::all();
        $batches = Batch::all();
        $payments = Payment::all();
        return view ('test.pages.winners.index', 
            [
                // 'batches' => $batches,
                // 'payments' => $payments,
                // 'lotteries' => $lotteries
            ]);
    }
}
