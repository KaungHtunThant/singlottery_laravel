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
                            <th>ID</th>
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
                            <th>ID</th>
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
                            <td>{{ $lottery->lottery_id }}<?php //echo $row['lottery_id']; ?></td>
                            <td>{{ $lottery->batch_id }}<?php //echo $row['batch_id']; ?></td>
                            <td>{{ $lottery->lottery_no }}<?php //echo $row['lottery_no']; ?></td>
                            <td>{{ $lottery->customer_name }}<?php //echo $row['customer_name']; ?></td>
                            <td>{{ $lottery->customer_ph_no }}<?php //echo $row['customer_ph_no']; ?></td>
                            <td>{{ $lottery->payment_id }}</td>
                            <td>{{ $lottery->paid }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection