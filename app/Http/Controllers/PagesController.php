<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Prize;
use App\Models\Lottery;
use App\Models\Batch;

class PagesController extends Controller
{
    public function getlastbatch()
    {
        $bidarray = array();
        $batches = DB::table('batches')->pluck('batch_id');
        foreach ($batches as $batch) {
            array_push($bidarray, $batch);
        }
        return $bidarray[count($bidarray)-1];
    }

    public function index()
    {
        //Fetch datas
        $results = Result::all();
        $prizes = Prize::all();
        $batches = Batch::all();

        // preparing variables
        $bidarray2 = array();
        $bid = $this->getlastbatch();

        $lotteries = DB::table('lotteries')
            ->where('batch_id', $bid)
            ->orWhereNot('customer_name', 'Available');

        // $total_lotteries = DB::table('lotteries')->pluck('batch_id')->where('batch_id', $bid);
        $tickets_total = Lottery::where('batch_id',$bid)->count();

        foreach ($lotteries as $lottery){
            array_push($bidarray2, $lottery);
        }
        
        $earnings = count($bidarray2)*1700;
        $customer_count = count($bidarray2);
        // $tickets_total = count($total_lotteries);
        $tickets_left = $tickets_total - $customer_count;
        $tickets_left_percent = $customer_count/$tickets_total*100;

        // return
        return view ('test.pages.index', 
            [
                'results' => $results,
                'prizes' => $prizes,
                'earnings' => $earnings,
                'customer_count' => $customer_count,
                'tickets_left' => $tickets_left,
                'tickets_left_percent' => $tickets_left_percent,
                'tickets_total' => $tickets_total,
                'lastbid' => $this->getlastbatch()
            ]);
    }
}
