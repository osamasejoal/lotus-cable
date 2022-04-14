@extends('backend.layouts.master')

@section('main-content')


    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="title text-center text-primary">Staff List</h1>

                    @if (session('success'))
                        <div class="alert alert-success text-center col-12 mt-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-wrap">
                        <table class="table table-bordered table-responsive-xl text-center">
                            <thead>
                                <tr>
                                    {{-- <th>Area</th> --}}
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Area</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
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
                                        <td>{{ $staff->name }}</td>
                                        <td>{{ $staff->area->name }}</td>
                                        <td>{{ $staff->email }}</td>
                                        <td>{{ $staff->phone }}</td>
                                        <td>{{ $staff->address}}</td>

                                        <td>
                                            {{ $staff->user->created_by }}
                                        <td>
                                            {{ $staff->user->updated_by }}
                                        </td>

                                        <td>
                                            @if ($staff->status == 1)
                                                <a href="{{route('staff.status', $staff->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-on"></i></a>
                                            @elseif ($staff->status == 0)
                                                <a href="{{route('staff.status', $staff->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-off"></i></a>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('staff.edit', $staff->id)}}" class="mr-3"><i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i></a>

                                            <form class="d-inline" action="{{route('staff.destroy', $staff->id)}}" method="POST">
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
