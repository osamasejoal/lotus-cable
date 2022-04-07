@extends('backend.layouts.master')

@section('main-content')
    <div class="container-fluid">




        <!--
                |--------------------------------------------------------------------------
                |                           SEARCH BAR
                |--------------------------------------------------------------------------
                -->
        <form action="{{ route('search.monthly.bill') }}" method="POST">
            @csrf
            <div class="search-bar"
                style="display:flex;flex-direction:row;justify-content:space-evenly;margin: 3rem 0 5rem 0;">

                <div class="form-group s-year">
                    <label for="year" style="font-weight:900;">Select Year</label>
                    <select name="year" id="year"
                        style="border:none;background:transparent;border-bottom:2px solid;width:150px;">
                        <option value="">-- Year --</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>

                    @error('year')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group s-month">
                    <label for="month" style="font-weight:900;">Select Month</label>
                    <select name="month" id="month"
                        style="border:none;background:transparent;border-bottom:2px solid;width:150px;">
                        <option value="">-- Month --</option>
                        <option value="january">january</option>
                        <option value="february">february</option>
                        <option value="march">march</option>
                        <option value="april">april</option>
                        <option value="may">may</option>
                        <option value="june">june</option>
                        <option value="july">july</option>
                        <option value="august">august</option>
                        <option value="september">september</option>
                        <option value="october">october</option>
                        <option value="november">november</option>
                        <option value="december">december</option>
                    </select>

                    @error('month')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group s-area">
                    <label for="area" style="font-weight:900;">Select Area</label>
                    <select name="area" id="area"
                        style="border:none;background:transparent;border-bottom:2px solid;width:150px;">
                        <option value="">-- Area --</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
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

            <div class="generate-unpaid-bill text-right mb-3">
                <a href="#" class="btn btn-success">Generate Unpaid Bill</a>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $year }}</td>
                                <td>{{ $month }}</td>
                                <td>{{ App\Models\Area::find($area_id)->name }}</td>
                                <td>{{ $customer->customer_id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


    </div>
@endsection
