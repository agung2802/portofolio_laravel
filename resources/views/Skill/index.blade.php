@extends('layout')

@section('content')

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Skill</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('skill.create') }}" class="btn bg-red-950 text-white hover:bg-red-800">Create</a>
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
            <th>Kategori Skill</th>
            <th>List Skill</th>
            <th>User</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($skill as $index => $res)
            <tr>
                <?php  if (Str::length($res->skill_id) > 0) {
                    # code...
                ?>
                <td>{{ ++$index }}</td>
                <td>{{ $res->skill_category }}</td>
                <td>{{ $res->skill_name }}</td>
                <?php
                $dashboard = DB::table('user')->where('id', $res->id_user)->first();; 
                ?>
                <td>{{ $dashboard->full_name }}</td>
                <td>
                    <form action="{{ route('skill.destroy', $res->skill_id) }}" method="POST">
                        <a href="{{ route('skill.show', $res->skill_id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('skill.edit', $res->skill_id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <?php } ?>
            </tr>
        @endforeach
    </table>

    @endsection