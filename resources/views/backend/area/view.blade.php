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
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($areas as $area)

                                    <tr class="alert" role="alert">
                                        <td>{{ $area->name }}</td>
                                        <td>{{ $area->status == 1 ? 'On' : 'Off' }}</td>
                                        <td class="col-2">
                                            <a href="{{route('area.edit', $area->id)}}" class="btn btn-sm btn-info mr-2">Edit</a>

                                            <form class="d-inline" action="{{route('area.destroy', $area->id)}}" method="POST">
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
