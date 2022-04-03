@extends('layouts.app')


@section('main-style-content')
    {{-- Style for Table --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('backend/table/css/style.css') }}">
    {{-- END Style for Table --}}
@endsection



@section('main-content')


    <section style="margin-top: -100px" class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="title text-center text-primary">Customer List</h1>

                    @if (session('success'))
                        <div class="alert alert-success text-center col-12 mt-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <div class="table-wrap">
                        <table style="min-width: 2000px !important" class="table table-responsive-xl text-center">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Area</th>
                                    <th>Package</th>
                                    <th>Customer ID</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>NID</th>
                                    <th>Register Date</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($customers as $customer)

                                    <tr class="alert" role="alert">
                                        <td>
                                            <img style="border-radius: 5px"
                                                src="{{ asset('backend/assets/images/profile-pic' . '/' . $customer->image) }}"
                                                alt="img not found" width="50px">
                                        </td>
                                        <td>{{ $customer->name }}</td>
                                        <td>Null</td>
                                        <td>Null</td>
                                        <td>{{ $customer->customer_id }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>
                                            @if ($customer->gender == 1)
                                                Male
                                            @elseif ($customer->gender == 2)
                                                Female
                                            @elseif ($customer->gender == 3)
                                                Others
                                            @endif
                                        </td>
                                        <td>{{ $customer->address}}</td>
                                        <td>Null</td>
                                        <td>Null</td>
                                        <td>{{ $customer->status == 1 ? 'On' : 'Off' }}</td>
                                        <td>{{ App\Models\User::find($customer->created_by)->name }}</td>

                                        <td>
                                            @if (App\Models\User::find($customer->updated_by) != null)
                                             {{ App\Models\User::find($customer->updated_by)->name }}
                                            @endif
                                        </td>

                                        <td class="col-2">
                                            <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-sm btn-info mr-2">Edit</a>

                                            <form class="d-inline" action="{{route('customer.destroy', $customer->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection




@section('main-script-content')
    {{-- Script for Table --}}
    {{-- <script src="{{ asset('backend/table/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('backend/table/js/popper.js') }}"></script>
    <script src="{{ asset('backend/table/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/table/js/main.js') }}"></script>
    {{-- END Script for Table --}}
@endsection
