@extends('backend.layouts.master')

@section('main-content')
    {{-- Card --}}
    <div class="card border-primary">
        <div class="card-header bg-primary text-white text-center">
            All Transaction result for: 
            "@foreach ($bills as $bill)
                {{ $bill->customer->name }}
            @endforeach"
        </div>
        <div class="card-body d-flex justify-content-center">
            <div class="mr-5">
                Total Paid: <strong>{{ $total_paid }}</strong>
            </div>

            <div>
                Total Due: 
                <strong>
                    @foreach ($bills as $bill)
                        {{ $bill->customer->due }}
                    @endforeach
                </strong>
            </div>
        </div>
    </div>


    {{-- Table --}}
    <table class="table table-bordered border-danger text-center">
        <thead>
            <td>#</td>
            <td>Date</td>
            <td>Type</td>
            <td>Area</td>
            <td>Customer ID</td>
            <td>Customer Phone</td>
            <td>Customer Name</td>
            <td>Package</td>
            <td>Paid/Due</td>
        </thead>
        <tbody>
            @foreach ($bills as $key => $bill)
                <td>{{ $bill->loop + 1 }}</td>
                <td>{{ $bill->bill_generate_date }}</td>
                <td>{{ $bill->transactionType->name }}</td>
                <td>{{ $bill->area->name }}</td>
                <td>{{ $bill->customer->customer_id }}</td>
                <td>{{ $bill->customer->phone }}</td>
                <td>{{ $bill->customer->name }}</td>
                <td>{{ $bill->package->name }}</td>
                <td>
                    @if ($bill->customer->due < 1)
                        <button class="btn btn-primary">Paid</button>
                    @else
                        <button class="btn btn-danger">Unpaid</button>
                    @endif
                    
                </td>
            @endforeach
        </tbody>
    </table>
@endsection
