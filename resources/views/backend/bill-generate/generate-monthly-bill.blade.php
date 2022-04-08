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
                        <option value="2022" {{ $year == 2022 ? 'selected' : '' }}>2022</option>
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
                        <option value="january" {{ $month == 'january' ? 'selected' : '' }}>january</option>
                        <option value="february" {{ $month == 'february' ? 'selected' : '' }}>february</option>
                        <option value="march" {{ $month == 'march' ? 'selected' : '' }}>march</option>
                        <option value="april" {{ $month == 'april' ? 'selected' : '' }}>april</option>
                        <option value="may" {{ $month == 'may' ? 'selected' : '' }}>may</option>
                        <option value="june" {{ $month == 'june' ? 'selected' : '' }}>june</option>
                        <option value="july" {{ $month == 'july' ? 'selected' : '' }}>july</option>
                        <option value="august" {{ $month == 'august' ? 'selected' : '' }}>august</option>
                        <option value="september" {{ $month == 'september' ? 'selected' : '' }}>september</option>
                        <option value="october" {{ $month == 'october' ? 'selected' : '' }}>october</option>
                        <option value="november" {{ $month == 'november' ? 'selected' : '' }}>november</option>
                        <option value="december" {{ $month == 'december' ? 'selected' : '' }}>december</option>
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

            <form action="{{route('insert.monthly.bill', $year, $month)}}" method="POST">
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
                                <th>CB</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <input class="text-center" style="border:none;width:60px" type="text" name="year" value="{{$year}}">
                                    </td>
                                    <td>
                                        <input class="text-center" style="border:none;width:70px" type="text" name="month" value="{{$month}}">
                                    </td>
                                    <td>{{ App\Models\Area::find($area_id)->name }}</td>
                                    <td>{{ $customer->customer_id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td><input type="checkbox" name="check[]" value="{{$customer->id}}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </form>

        @endif


    </div>
@endsection
