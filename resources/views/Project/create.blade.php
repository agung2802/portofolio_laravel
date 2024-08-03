@extends('layout')

@section('content')
<?php
$dashboard = DB::table('user')->get(); 
?>

<div class="mt-5">
    <div class="">
        <div class=" w-full">
            <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Add Project</h2>
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
    
    <form action="{{ route('project.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Nama Project: </strong>
                <input type="text" name="project_name" placeholder="Nama Project" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Deskripsi Project: </strong>
            <input type="text" name="project_desc" placeholder="Deskripsi Project" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Deskripsi Pekerjaan: </strong>
            <input type="text" name="job_desc" placeholder="Deskripsi Pekerjaan" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Teknologi yang digunakan: </strong>
            <input type="text" name="technology" placeholder="Teknologi yang digunakan" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Teknologi Lainnya: </strong>
            <input type="text" name="other" placeholder="Teknologi Lainnya" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Username: </strong>
            <select class="form-select" aria-label="Example select with button addon" name="id_user" id="id_user">
                <option selected hidden>Select User</option>
                @foreach ($dashboard as $user)
                    <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success float-right">Submit</button>
        </div>
    </div>
</form>
@endsection