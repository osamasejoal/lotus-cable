@extends('backend.layouts.master')

@section('main-content')
    <div class="container-fluid">




        <!--
                |--------------------------------------------------------------------------
                |                           SEARCH BAR
                |--------------------------------------------------------------------------
                -->
        <form action="{{ route('search.monthly.bill') }}" method="get">
            @csrf
            <div class="search-bar d-flex flex-row justify-content-around" style="margin: 3rem 0 5rem 0;">

                <div class="form-group s-year d-flex flex-column">
                    <label for="year" style="font-weight:900;">Select Year</label>
                    <select name="year" id="year"
                        style="border:none;background:transparent;border-bottom:2px solid;width:200px;margin:4px 0;">
                        <option value="">-- Year --</option>
                        <option value="2022`" {{ $year == 2022 ? 'selected' : '' }}>2022</option>
                        <option value="2023" {{ $year == 2023 ? 'selected' : '' }}>2023</option>
                        <option value="2024" {{ $year == 2024 ? 'selected' : '' }}>2024</option>
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

                <div class="generate-unpaid-bill text-right mb-3">
                    <button type="submit" class="btn btn-success">Generate Unpaid Bill</button>
                </div>

                <div class="table-wrap">
                    <table class="table table-bordered table-responsive-xl text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Year</th>
                                <th>Month</th>
                                <th>Area</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>
                                    <input type="checkbox" name="check[]" 
                                    value=" @foreach ($customers as $cst)
                                                {{ $cst->id }}
                                            @endforeach ">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                {{-- @if (duplicate_bill_check($customer->id, $year, $month, $area_id)) --}}
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            {{ $year }}
                                            <input class="text-center" style="display:none" type="text" name="year"
                                                value="{{ $year }}">
                                        </td>
                                        <td>
                                            @if ($month == 1)
                                                january
                                            @elseif($month == 2)
                                                february
                                            @elseif($month == 3)
                                                march
                                            @elseif($month == 4)
                                                aprill
                                            @elseif($month == 5)
                                                may
                                            @elseif($month == 6)
                                                june
                                            @elseif($month == 7)
                                                july
                                            @elseif($month == 8)
                                                august
                                            @elseif($month == 9)
                                                september
                                            @elseif($month == 10)
                                                october
                                            @elseif($month == 11)
                                                november
                                            @elseif($month == 12)
                                                december
                                            @endif
                                            <input class="text-center" style="display:none" type="text" name="month"
                                                value="{{ $month }}">
                                        </td>
                                        <td>
                                            {{ $customer->area->name }}
                                        </td>
                                        <td>
                                            {{ $customer->customer_id }}
                                        </td>
                                        <td>
                                            {{ $customer->name }}
                                        </td>
                                        <td>
                                            {{ $customer->phone }}
                                        </td>
                                        <td><input type="checkbox" name="check[]" value="{{ $customer->id }}"></td>
                                    </tr>
                                {{-- @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </form>
        @endif


    </div>
@endsection
