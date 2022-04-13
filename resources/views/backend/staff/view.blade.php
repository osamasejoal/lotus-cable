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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($staffs as $staff)
                                    {{-- <td>{{ $staff->area->name }}</td> --}}
                                    <tr class="alert" role="alert">
                                        <td>
                                            <img style="border-radius: 5px"
                                                src="{{ asset('backend/assets/images/profile-pic' . '/' . $staff->image) }}"
                                                alt="img not found" width="50px">
                                        </td>
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

                                        <td>{{ App\Models\User::find($staff->created_by)->name }}</td>

                                        <td>
                                            @if (App\Models\User::find($staff->updated_by) != null)
                                             {{ App\Models\User::find($staff->updated_by)->name }}
                                            @endif
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
