@extends('layout')

@section('content')
    <?php
    $dashboard = DB::table('user')->get(); 
    ?>
    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Edit Skill</h2>
            </div>
    
            <div class="mt-3">
                <a href="{{ route('skill.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
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

    <form action="{{ route('skill.update', $skill->skill_id) }}" method="post" class="mt-3">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>List Skill:</strong>
                    <input type="text" name="skill_name" value="{{ $skill->skill_name }}" class="form-control" placeholder="List Skill">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori Skill:</strong>
                    <input class="form-control" name="skill_category" placeholder="Kategori Skill" value="{{ $skill->skill_category }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <select class="form-select" aria-label="Example select with button addon" name="id_user" id="id_user">
                        <option selected hidden>Select User</option>
                        @foreach ($dashboard as $user)
                        @if ($skill->id_user == $user->id)
                            <option value="{{ $user->id }}" selected>{{ $user->full_name }}</option>
                        @else
                            <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-3">
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </div>
        </div>
    </form>

    @endsection