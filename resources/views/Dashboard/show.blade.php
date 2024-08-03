@extends('layout')

@section('content')

    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Show Mahasiswa</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('dashboard.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
            </div>
        </div>
    </div>

    <table class="text-3xl mt-3">
        <tr>
            <th class="pr-7">Nama Lengkap</th>
            <td>:</td>
            <td class="pl-7">{{ $dashboard->full_name }}</td>
        </tr>
        <tr>
            <th class="pr-7">Objective</th>
            <td>:</td>
            <td class="pl-7">{{ $dashboard->self_objective }}</td>
        </tr>
        <tr>
            <th class="pr-7">Alamat</th>
            <td>:</td>
            <td class="pl-7">{{ $dashboard->address }}</td>
        </tr>
        <tr>
            <th class="pr-7">Photo</th>
            <td>:</td>
            <td class="pl-7">
                <div class="bg-white rounded-lg w-56 h-auto">
                    <img src="{{ asset($dashboard->photo) }}" alt="{{ $dashboard->name }}">
                </div>
            </td>
        </tr>
    </table>
@endsection