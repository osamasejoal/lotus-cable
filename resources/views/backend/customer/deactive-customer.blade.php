@extends('backend.layouts.master')

@section('main-content')


    <section style="" class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="title text-center text-primary">Deactive Customer</h1>

                    @if (session('success'))
                        <div class="alert alert-success text-center col-12 mt-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-wrap mb-5">
                        <table class="table table-bordered table-responsive-xl text-center">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>C. ID</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Area</th>
                                    <th>Package</th>
                                    <th>Due</th>
                                    <th>Transaction</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($customers as $customer)

                                    <tr class="alert" role="alert">
                                        <td>
                                            <img style="border-radius: 5px"
                                                src="{{ asset('backend/assets/images/profile-pic' . '/' . $customer->user->image) }}"
                                                alt="img not found" width="50px">
                                        </td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->customer_id }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address}}</td>
                                        <td>{{ $customer->area->name}}</td>
                                        <td>{{ $customer->package->name}}</td>
                                        <td>{{ $customer->due}}</td>
                                        <td>
                                            <a href="{{ route('customer.transaction', $customer->customer_id) }}" class="btn btn-primary">Transaction</a>
                                        </td>
                                        <td>
                                            @if ($customer->status == 1)
                                                <a href="{{route('customer.status', $customer->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-on"></i></a>
                                            @elseif ($customer->status == 0)
                                                <a href="{{route('customer.status', $customer->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-off"></i></a>
                                            @endif
                                        </td>

                                        <td class="col-1">
                                            <a href="{{route('customer.edit', $customer->id)}}" class="mr-3"><i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i></a>

                                            <form class="d-inline" action="{{route('customer.destroy', $customer->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="delete-btn"><i class="font-icon fa fa-trash-o" style="font-size: 30px;"></i></button>
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
