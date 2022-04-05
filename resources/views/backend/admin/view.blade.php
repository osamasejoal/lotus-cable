@extends('layouts.app')

@section('main-content')
    <section style="margin-top: -100px" class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="title text-center text-primary">Admin List</h1>

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

                                @foreach ($admins as $admin)
                                    <tr class="alert" role="alert">
                                        <td>
                                            <img style="border-radius: 5px"
                                                src="{{ asset('backend/assets/images/profile-pic' . '/' . $admin->image) }}"
                                                alt="img not found" width="50px">
                                        </td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->phone }}</td>
                                        <td>
                                            @if ($admin->gender == 1)
                                                Male
                                            @elseif ($admin->gender == 2)
                                                Female
                                            @elseif ($admin->gender == 3)
                                                Others
                                            @endif
                                        </td>
                                        <td>{{ $admin->address }}</td>

                                        <td>
                                            @if ($admin->created_by != null)
                                                {{ App\Models\User::find($admin->created_by)->name }}
                                            @endif
                                        </td>

                                        <td>
                                            @if ($admin->updated_by != null)
                                                {{ App\Models\User::find($admin->updated_by)->name }}
                                            @endif
                                        </td>

                                        <td>
                                            @if ($admin->status == 1)
                                                <a href="{{route('admin.status', $admin->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-on"></i></a>
                                            @elseif ($admin->status == 0)
                                                <a href="{{route('admin.status', $admin->id)}}"><i style="font-size: 35px" class="font-icon fa fa-toggle-off"></i></a>
                                            @endif
                                        </td>

                                        <td class="col-2">
                                            <a href="{{ route('admin.edit', $admin->id) }}"
                                                class="mr-3"><i class="font-icon fa fa-pencil-square-o" style="font-size: 30px"></i></a>

                                            <form class="d-inline" action="{{ route('admin.destroy', $admin->id) }}"
                                                method="POST">
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
