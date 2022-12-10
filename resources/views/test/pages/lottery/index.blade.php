@extends('test.layouts.master')
@section('title', 'Lotteries')
@section('content')
<!DOCTYPE html>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lottries List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Batch</th>
                            <th>Lottery Number</th>
                            <th>Customer Name</th>
                            <th>Customer Phone No.</th>
                            <th>Payment Method</th>
                            <th>Paid</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Batch</th>
                            <th>Lottery Number</th>
                            <th>Customer Name</th>
                            <th>Customer Phone No.</th>
                            <th>Payment Method</th>
                            <th>Paid</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($lotteries as $lottery)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lottery->batch_id }}</td>
                            <td>{{ $lottery->lottery_no }}</td>
                            <td>{{ $lottery->customer_name }}</td>
                            <td>{{ $lottery->customer_ph_no }}</td>
                            <td>
                                @foreach($payments as $payment)
                                    @if($payment->payment_id == $lottery->payment_id)
                                        {{ $payment->payment_method }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @if($lottery->paid == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection