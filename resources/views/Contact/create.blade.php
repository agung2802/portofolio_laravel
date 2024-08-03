@extends('layout')

@section('content')
<?php
$dashboard = DB::table('user')->get(); 
?>
<div class="mt-5">
    <div class="">
        <div class=" w-full">
            <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Add New</h2>
        </div>

        <div class="mt-3">
            <a href="{{ route('contact.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
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

<form action="{{ route('contact.store') }}" method="POST" class="mt-3">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Jenis Kontak: </strong>
            <input type="text" name="contact_type" placeholder="Jenis Kontak" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Link Kontak: </strong>
            <input type="text" name="contact_value" placeholder="Kontak Value" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <select class="form-select" aria-label="Example select with button addon" name="id_user" id="id_user">
                    <option selected hidden>Select User</option>
                    @foreach ($dashboard as $user)
                    <option value="{{ $user->id }}">{{ $user->full_name }}</option>
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