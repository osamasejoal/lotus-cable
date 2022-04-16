@extends('backend.layouts.master')

@section('main-content')
    <div class="container-fluid">




        <!--
                |--------------------------------------------------------------------------
                |                           SEARCH BAR
                |--------------------------------------------------------------------------
                -->
        <form action="{{ route('search.monthly.payment') }}" method="get">
            @csrf
            <div class="search-bar d-flex flex-row justify-content-around" style="margin: 3rem 0 5rem 0;">

                <div class="form-group s-year d-flex flex-column">
                    <label for="year" style="font-weight:900;">Select Year</label>
                    <select name="year" id="year"
                        style="border:none;background:transparent;border-bottom:2px solid;width:200px;margin:4px 0;">
                        <option value="">-- Year --</option>
                        <option value="2022" {{ $year == 2022 ? 'selected' : '' }}>2022</option>
                        <option value="2021" {{ $year == 2021 ? 'selected' : '' }}>2021</option>
                        <option value="2020" {{ $year == 2020 ? 'selected' : '' }}>2020</option>
                    </select>

                    @error('year')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group s-month d-flex flex-column">
                    <label for="month" style="font-weight:900;">Select Month</label>
                    <select name="month" id="month"
                        style="border:none;background:transparent;border-bottom:2px solid;width:200px;margin:4px 0;">
                        <option value="">-- Month --</option>
                        <option value="1" {{ $month == '1' ? 'selected' : '' }}>january</option>
                        <option value="2" {{ $month == '2' ? 'selected' : '' }}>february</option>
                        <option value="3" {{ $month == '3' ? 'selected' : '' }}>march</option>
                        <option value="4" {{ $month == '4' ? 'selected' : '' }}>april</option>
                        <option value="5" {{ $month == '5' ? 'selected' : '' }}>may</option>
                        <option value="6" {{ $month == '6' ? 'selected' : '' }}>june</option>
                        <option value="7" {{ $month == '7' ? 'selected' : '' }}>july</option>
                        <option value="8" {{ $month == '8' ? 'selected' : '' }}>august</option>
                        <option value="9" {{ $month == '9' ? 'selected' : '' }}>september</option>
                        <option value="10" {{ $month == '10' ? 'selected' : '' }}>october</option>
                        <option value="11" {{ $month == '11' ? 'selected' : '' }}>november</option>
                        <option value="12" {{ $month == '12' ? 'selected' : '' }}>december</option>
                    </select>

                    @error('month')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group s-area d-flex flex-column">
                    <label for="area" style="font-weight:900;">Select Area</label>
                    <select name="area" id="area"
                        style="border:none;background:transparent;border-bottom:2px solid;width:200px;margin:4px 0;">
                        <option value="">-- Area --</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}" {{ $area->id == $area_id ? 'selected' : '' }}>
                                {{ $area->name }}</option>
                        @endforeach
                    </select>

                    @error('area')
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
                |                          BILL GENERATE TABLE
                |--------------------------------------------------------------------------
                -->
        @if ($year != null || $month != null || $area_id != null)
            <form action="{{ route('insert.monthly.bill') }}" method="POST">
                @csrf

                <div class="table-wrap">
                    <table class="table table-bordered table-responsive-xl text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Year</th>
                                <th>Month</th>
                                <th>Payment Type</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>Due Amount</th>
                                <th>Paid/Due</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bills as $bill)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            {{ $bill->year }}
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
                                            {{ $bill->transactionType->name }}
                                        </td>
                                        <td>
                                            {{ $bill->customer->customer_id }}
                                        </td>
                                        <td>
                                            {{ $bill->customer->name }}
                                        </td>
                                        <td>
                                            {{ $bill->customer->phone }}
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </form>
        @endif


    </div>
@endsection