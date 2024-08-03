@extends('layout')

@section('content')

    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Dashboard</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('dashboard.create') }}" class="btn bg-red-950 text-white hover:bg-red-800">Create</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>        
    @endif

    <table class="table table-auto table-striped table-dark table-hover mt-3">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Objektif</th>
            <th>Alamat</th>
            <th>Photo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dashboard as $index => $res)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $res->full_name }}</td>
                <td>{{ $res->self_objective }}</td>
                <td>{{ $res->address }}</td>
                <td><img src="{{ asset($res->photo) }}" alt="{{ $res->name }}" class="w-24 h-auto"></td>
                <td>
                    <form action="{{ route('dashboard.destroy', $res->id) }}" method="POST">
                        <a href="{{ route('dashboard.show', $res->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('dashboard.edit', $res->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    @endsection