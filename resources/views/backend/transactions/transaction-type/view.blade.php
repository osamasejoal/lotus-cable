@extends('layouts.app')

@section('main-content')
    <section style="margin-top: -100px" class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="title text-center text-primary">Transaction Type List</h1>

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

                                @foreach ($trans_types as $t_type)
                                    <tr class="alert" role="alert">
                                        <td>{{ $t_type->name }}</td>
                                        <td>{{ $t_type->amount }}</td>

                                        <td>
                                            @if ($t_type->status == 1)
                                                <a href="{{route('transaction.type.status', $t_type->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-on"></i></a>
                                            @elseif ($t_type->status == 0)
                                                <a href="{{route('transaction.type.status', $t_type->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-off"></i></a>
                                            @endif
                                        </td>

                                        <td class="col-2">
                                            <a href="{{ route('transaction-type.edit', $t_type->id) }}"
                                                class="mr-3"><i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i></a>

                                            <form class="d-inline"
                                                action="{{ route('transaction-type.destroy', $t_type->id) }}" method="POST">
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




@section('main-script-content')