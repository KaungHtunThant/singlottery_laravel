@extends('test.layouts.master')
@section('title', 'Add Lottery')
@section('content')
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Lottery Form</h1>
            </div>
            <div class="card shadow h-100 py-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lottery Form</h6>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->name }}">
                            <!-- <input type="hidden" namm=""> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lottery_no">Lottery No.</label>
                                    <input type="text" class="form-control" name="lottery_no" id="lottery_no" aria-describedby="lottery_no_Help" placeholder="Enter lottery no." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="batch_id">Batch</label>
                                        <div class="col-8">
                                            <select class="form-control" id="batch_id" name="batch_id" required>
                                                <option value="" selected>None</option>
                                                @foreach($batches as $batch)
                                                    <option value="{{ $batch->batch_id }}">
                                                        {{ $batch->batch_id }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New<span class="d-none d-lg-inline"> Batch</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name">Customer Name</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" aria-describedby="customer_name_Help" placeholder="Enter customer name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_ph_no">Customer Phone No.</label>
                                    <input type="text" class="form-control" name="customer_ph_no" id="customer_ph_no" aria-describedby="customer_ph_no_Help" placeholder="Enter customer phone no.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payment_id">Payment Type</label>
                                    <select class="form-control" id="payment_id" name="payment_id">
                                        <option selected>--- Choose a payment option ---</option>
                                        @foreach($payments as $payment)
                                        <option value="{{ $payment->payment_id }}">
                                            {{ $payment->payment_method }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="paid">Paid :</label>
                                    <input type="radio" class="btn-check" name="paid" id="option1" autocomplete="off" value="1" checked>
                                    <label class="btn btn-sm btn-outline-success" for="option1">Yes</label> | 
                                    <input type="radio" class="btn-check" name="paid" id="option2" autocomplete="off" value="0">
                                    <label class="btn btn-sm btn-outline-danger" for="option2">No</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <hr class="d-md-none divider">
                                    <div class="d-flex justify-content-center">
                                        <input class="btn btn-primary" type="submit" name="lottery_insert" value="Submit"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Batch 
                            <?php
                                // echo lastBatchSelect();
                            ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form method="post" action="{{ url('/lotteryform') }}">
                        {!! csrf_field() !!}
                        <div class="modal-body">
                            <input type="hidden" name="batch_id" value="lastBatchSelect();">
                            <label for="start_date">Start Date</label>
                            <input type="text" class="form-control" name="start_date" id="start_date" aria-describedby="start_date_Help" placeholder="Enter Start Date">
                            <label for="end_date">End Date</label>
                            <input type="text" class="form-control" name="end_date" id="end_date" aria-describedby="end_date_Help" placeholder="Enter End Date">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="batch_insert">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection