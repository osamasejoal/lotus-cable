@extends('backend.layouts.master')

@section('main-content')
    <div class="container-fluid">




        <!--
                |--------------------------------------------------------------------------
                |                           SEARCH BAR
                |--------------------------------------------------------------------------
                -->
        <form action="{{ route('search.due.transaction') }}" method="get">
            @csrf

            @if (session('error'))
                <div class="alert alert-danger text-center col-12 mt-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="search-bar d-flex flex-row justify-content-around" style="margin: 3rem 0 5rem 0;">

                <!-- Customer ID -->
                <div class="form-group d-flex flex-column">
                    <label for="c_id" style="font-weight:900;">Customer ID</label>
                    <select name="c_id" id="c_id"
                        style="border:none;background:transparent;border-bottom:2px solid;width:220px;margin:4px 0;">
                        <option value="">-- Enter Customer ID --</option>
                        @foreach ($search_bills as $bill)
                            <option value="{{ $bill->customer->customer_id }}">{{ $bill->customer->customer_id }}
                            </option>
                        @endforeach
                    </select>

                    @error('c_id')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Customer Name -->
                <div class="form-group d-flex flex-column">
                    <label for="c_name" style="font-weight:900;">Customer Name</label>
                    <select name="c_name" id="c_name"
                        style="border:none;background:transparent;border-bottom:2px solid;width:220px;margin:4px 0;">
                        <option value="">-- Enter Customer Name --</option>
                        @foreach ($search_bills as $bill)
                            <option value="{{ $bill->customer->name }}">{{ $bill->customer->name }}</option>
                        @endforeach
                    </select>

                    @error('c_name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Date -->
                <div class="form-group d-flex flex-column">
                    <label for="date" style="font-weight:900;">Date</label>
                    <input type="date" name="date" id="date"
                        style="border:none;background:transparent;border-bottom:2px solid;width:220px;margin:4px 0;">

                    @error('date')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group s-btn">
                    <button class="submit-btn btn btn-primary" type="submit">Search</button>
                </div>

            </div>
        </form>




        <!--
            |--------------------------------------------------------------------------
            |                          PAID TRANSACTION TABLE
            |--------------------------------------------------------------------------
            -->

        <div class="table-wrap">
            <table class="table table-bordered table-responsive-xl text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>C. ID</th>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Month</th>
                        <th>Date</th>
                        <th>Paid</th>
                        <th>Due</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $key => $bill)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                {{ $bill->customer->customer_id }}
                            </td>
                            <td>
                                {{ $bill->customer->name }}
                            </td>
                            <td>
                                {{ $bill->area->name }}
                            </td>
                            <td>
                                @if ($bill->month == 1)
                                    january
                                @elseif($bill->month == 2)
                                    february
                                @elseif($bill->month == 3)
                                    march
                                @elseif($bill->month == 4)
                                    aprill
                                @elseif($bill->month == 5)
                                    may
                                @elseif($bill->month == 6)
                                    june
                                @elseif($bill->month == 7)
                                    july
                                @elseif($bill->month == 8)
                                    august
                                @elseif($bill->month == 9)
                                    september
                                @elseif($bill->month == 10)
                                    october
                                @elseif($bill->month == 11)
                                    november
                                @elseif($bill->month == 12)
                                    december
                                @endif
                            </td>
                            <td>
                                {{ $bill->bill_generate_date }}
                            </td>
                            <td>
                                {{ $bill->paid_amount }}
                            </td>
                            <td>
                                {{ $bill->customer->due }}
                            </td>
                            <td>
                                <a href="#" class="mr-3">
                                    <abbr title="Edit" style="border:none;cursor:pointer;">
                                    <i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i>
                                    </abbr>
                                </a>
                                <a href="{{ route('delete.due.transaction', $bill->id) }}" class="mr-3">
                                    <abbr title="Delete" style="border:none;cursor:pointer;">
                                    <i class="font-icon fa fa-trash-o" style="font-size: 30px"></i>
                                    </abbr>
                                </a>
                                <a href="#">
                                    <abbr title="Paid" style="border:none;cursor:pointer;">
                                    <i class="font-icon fa fa-suitcase" style="font-size: 30px"></i>
                                    </abbr>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
