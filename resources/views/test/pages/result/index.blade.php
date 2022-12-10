@extends('test.layouts.master')
@section('title', 'Results')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Results</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Winning Number</th>
                                    <th>Batch</th>
                                    <th>Prize</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Winning Number</th>
                                    <th>Batch</th>
                                    <th>Prize</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($results as $result)
                                <tr>
                                    <td>{{ $result->result_id }}</td>
                                    <td>{{ $result->result_lottery_no }}</td>
                                    <td>Draw No. {{ $result->batch_id }}
                                    </td>
                                    <td>
                                        @foreach($prizes as $prize)
                                            @if($prize->prize_id == $result->prize_id)
                                                {{ $prize->prize_name }}
                                            @endif
                                        @endforeach
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