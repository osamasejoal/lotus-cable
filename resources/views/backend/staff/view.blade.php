@extends('layouts.app')


@section('main-style-content')
    {{-- Style for Table --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('backend/table/css/style.css') }}">
    {{-- END Style for Table --}}

    
    <!-- Style for Status Toggle -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <!-- END Style for Status Toggle -->
@endsection



@section('main-content')


    <section style="margin-top: -100px" class="ftco-section">
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

                                        <td>
                                            <input data-id="{{ $staff->id }}" class="toggle-class" type="checkbox"
                                                data-size="xs" data-onstyle="success" data-offstyle="danger"
                                                data-toggle="toggle" data-on="Active" data-off="Deactive"
                                                {{ $staff->status ? 'checked' : '' }}>
                                        </td>

                                        <td>{{ App\Models\User::find($staff->created_by)->name }}</td>

                                        <td>
                                            @if (App\Models\User::find($staff->updated_by) != null)
                                             {{ App\Models\User::find($staff->updated_by)->name }}
                                            @endif
                                        </td>

                                        <td class="col-2">
                                            <a href="{{route('staff.edit', $staff->id)}}" class="btn btn-sm btn-info mr-2">Edit</a>

                                            <form class="d-inline" action="{{route('staff.destroy', $staff->id)}}" method="POST">
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

     <!-- Script for Status Toggle -->
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var staff_id = $(this).data('id');
                $.ajax({

                    type: "GET",
                    dataType: "json",
                    url: '/update/staff/status',
                    data: {
                        'status': status,
                        'staff_id': staff_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        });
    </script>
    <!-- END Script for Status Toggle -->
@endsection
