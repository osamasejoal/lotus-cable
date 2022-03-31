@extends('layouts.app')


@section('main-style-content')
    {{-- Style for Table --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('backend/table/css/style.css') }}">
    {{-- END Style for Table --}}
@endsection



@section('main-content')


    <section style="margin-top: -50px" class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-responsive-xl text-center">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Staff_id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($staffs as $staff)

                                    <tr class="alert" role="alert">
                                        <td>
                                            <img style="border-radius: 5px"
                                                src="{{ asset('backend/assets/images/profile-pic' . '/' . $staff->image) }}"
                                                alt="img not found" width="50px">
                                        </td>
                                        <td>{{ $staff->staff_id }}</td>
                                        <td>{{ $staff->name }}</td>
                                        <td>{{ $staff->email }}</td>
                                        <td>{{ $staff->phone }}</td>
                                        <td>
                                            @if ($staff->gender == 1)
                                                Male
                                            @elseif ($staff->gender == 2)
                                                Female
                                            @elseif ($staff->gender == 3)
                                                Others
                                            @endif
                                        </td>
                                        <td>{{ $staff->address}}</td>
                                        <td>{{ $staff->status == 1 ? 'On' : 'Off' }}</td>
                                        <td>{{ $staff->created_by}}</td>
                                        <td>{{ $staff->updated_by}}</td>
                                        <td class="col-2">
                                            <a href="{{route('staff.edit', $categorie->id)}}" class="btn btn-sm btn-info mr-2">Edit</a>

                                            <form class="d-inline" action="{{route('staff.destroy', $categorie->id)}}" method="POST">
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
