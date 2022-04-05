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
                                            @if ($package->status == 1)
                                                <a href="{{route('package.status', $package->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-on"></i></a>
                                            @elseif ($package->status == 0)
                                                <a href="{{route('package.status', $package->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-off"></i></a>
                                            @endif
                                        </td>


                                        <td class="col-2">
                                            <a href="{{ route('package.edit', $package->id) }}"
                                                class="mr-3"><i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i></a>

                                            <form class="d-inline"
                                                action="{{ route('package.destroy', $package->id) }}" method="POST">
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
