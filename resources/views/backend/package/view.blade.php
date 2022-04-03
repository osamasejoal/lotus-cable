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

                    <h1 class="title text-center text-primary">Package List</h1>

                    @if (session('success'))
                        <div class="alert alert-success text-center col-12 mt-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-wrap">
                        <table class="table table-responsive-xl text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($packages as $package)
                                    <tr class="alert" role="alert">

                                        <td>{{ $package->name }}</td>
                                        <td>{{ $package->amount }}</td>
                                        <td>
                                            <input data-id="{{ $package->id }}" class="toggle-class" type="checkbox"
                                                data-size="xs" data-onstyle="success" data-offstyle="danger"
                                                data-toggle="toggle" data-on="Active" data-off="Deactive"
                                                {{ $package->status ? 'checked' : '' }}>
                                        </td>


                                        <td class="col-2">
                                            <a href="{{ route('package.edit', $package->id) }}"
                                                class="btn btn-sm btn-info mr-2">Edit</a>

                                            <form class="d-inline"
                                                action="{{ route('package.destroy', $package->id) }}" method="POST">
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
                var package_id = $(this).data('id');
                $.ajax({

                    type: "GET",
                    dataType: "json",
                    url: '/update/package/status',
                    data: {
                        'status': status,
                        'package_id': package_id
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
