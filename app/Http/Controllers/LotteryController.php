<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\Batch;
use App\Models\Payment;

class LotteryController extends Controller
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
        $lotteries = Lottery::orderByDesc('lottery_id')->get();
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
        $newbid = $this->getlastbatch()+1;
        return view ('test.pages.lottery.create', 
            [
                'batches' => $batches,
                'payments' => $payments,
                'newbid' => $newbid
            ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Lottery::create($input);
        return redirect('/lottery')->with('flash_message', 'Lottery Added!');  
    }

    // public function edit($id)
    // {
    //     $student = Students::find($id);
    //     return view('pages.edit')->with('students', $student);
    // }
  
    // public function update(Request $request, $id)
    // {
    //     $student = Lottery::find($id);
    //     $input = $request->all();
    //     $student->update($input);
    //     return redirect('/lottery')->with('flash_message', 'Lottery Updated!');  
    // }
  
    // public function destroy($id)
    // {
    //     Students::destroy($id);
    //     return redirect('/')->with('flash_message', 'Students deleted!');  
    // }

}
