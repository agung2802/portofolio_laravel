@extends('layout')

@section('content')

    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Detail Project</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('project.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
            </div>
        </div>
    </div>

    <table class="text-3xl mt-3 w-full">
        <tr>
            <th class="pr-7">Username</th>
            <td>:</td>
            <?php
            $dashboard = DB::table('user')->where('id', $project->id_user)->first();; 
            ?>
            <td class="pl-7">{{ $dashboard->full_name }}</td>
        </tr>
        <tr>
            <th class="pr-7">Nama Project</th>
            <td>:</td>
            <td class="pl-7 ">{{ $project->project_name }}</td>
        </tr>
        <tr>
            <th class="pr-7">Project Deskripsi</th>
            <td>:</td>
            <td class="pl-7">{{ $project->project_desc }}</td>
        </tr>
        <tr>
            <th class="pr-7">Deskripsi Pekerjaan</th>
            <td>:</td>
            <td class="pl-7">{{ $project->job_desc }}</td>
        </tr>
        <tr>
            <th class="pr-7">Teknologi yang digunakan</th>
            <td>:</td>
            <td class="pl-7">{{ $project->technology }}</td>
        </tr>
        <tr>
            <th class="pr-7">Teknologi Lainnya</th>
            <td>:</td>
            <td class="pl-7">{{ $project->other }}</td>
        </tr>
    </table>
    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Project:</strong>
                {{ $project->project_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Project Deskripsi:</strong>
                {{ $project->project_desc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi Pekerjaan:</strong>
                {{ $project->job_desc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teknologi yang digunakan:</strong>
                {{ $project->technology }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teknologi Lainnya:</strong>
                {{ $project->other }}
            </div>
        </div>
    </div> --}}
@endsection