@extends('backend.layouts.master')

@section('main-content')
    {{-- Card --}}
    <div class="card border-primary">
        <div class="card-header bg-primary text-white text-center">
            All Transaction result for: "{{ $customers->name }}"
        </div>
        <div class="card-body d-flex justify-content-center">
            <div class="mr-5">
                Total Paid: <strong>1100</strong>
            </div>

            <div>
                Total Due: <strong>100</strong>
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
            @foreach ($bill_date as $key => $bgd)
                <td>1</td>
                <td>{{ $bgd }}</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            @endforeach
        </tbody>
    </table>
@endsection
