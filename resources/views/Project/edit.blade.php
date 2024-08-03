@extends('layout')

@section('content')
<?php
$dashboard = DB::table('user')->get(); 
?>
    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Edit Project</h2>
            </div>
    
            <div class="mt-3">
                <a href="{{ route('project.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('project.update', $project->project_id) }}" method="post" class="mt-3">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Project:</strong>
                    <input type="text" name="project_name" value="{{ $project->project_name }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Project Deskripsi:</strong>
                    <input class="form-control" name="project_desc" placeholder="Objektif" value="{{ $project->project_desc }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi Pekerjaan:</strong>
                    <input class="form-control" name="job_desc" placeholder="Kelas" value="{{ $project->job_desc }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teknologi yang digunakan:</strong>
                    <input class="form-control" name="technology" placeholder="Kelas" value="{{ $project->technology }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teknologi Lainnya:</strong>
                    <input class="form-control" name="other" placeholder="Kelas" value="{{ $project->other }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username: </strong>
                    <select class="form-select" aria-label="Example select with button addon" name="id_user" id="id_user">
                        <option selected hidden>Select User</option>
                        @foreach ($dashboard as $user)
                        @if ($project->id_user == $user->id)
                            <option value="{{ $user->id }}" selected>{{ $user->full_name }}</option>
                        @else
                            <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </div>
        </div>
    </form>

    @endsection