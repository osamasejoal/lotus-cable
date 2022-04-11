@extends('backend.layouts.master')

@section('main-content')


    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="title text-center text-primary">Transaction Option List</h1>

                    @if (session('success'))
                        <div class="alert alert-success text-center col-12 mt-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="text-right mb-3">
                        <a class="btn btn-info" href="{{ route('transaction-option.create') }}">+ Create Transaction Option</a>
                    </div>

                    <div class="table-wrap">
                        <table class="table table-bordered table-responsive-xl text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($trans_options as $t_option)

                                    <tr class="alert" role="alert">
                                        <td>{{ $t_option->name }}</td>

                                        <td>
                                            @if ($t_option->status == 1)
                                                <a href="{{route('transaction.option.status', $t_option->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-on"></i></a>
                                            @elseif ($t_option->status == 0)
                                                <a href="{{route('transaction.option.status', $t_option->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-off"></i></a>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('transaction-option.edit', $t_option->id)}}" class="mr-3"><i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i></a>

                                            <form class="d-inline" action="{{route('transaction-option.destroy', $t_option->id)}}" method="POST">
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
