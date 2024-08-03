@extends('layout')

@section('content')

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Dashboard</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('project.create') }}" class="btn bg-red-950 text-white hover:bg-red-800">Create</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>        
    @endif

    <table class="table table-auto table-striped table-dark table-hover mt-3">
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            {{-- <th>Deskripsi Project</th>
            <th>Deskripsi Pekerjaan</th> --}}
            <th>Teknologi yang digunakan</th>
            <th>Teknologi lainnya</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($project as $index => $res)
            <tr>
                <?php  if (Str::length($res->project_id) > 0) {
                    # code...
                ?>
                    <td>{{ ++$index }}</td>
                    <td>{{ $res->project_name }}</td>
                    {{-- <td>{{ $res->project_desc }}</td>
                    <td>{{ $res->job_desc }}</td> --}}
                    <td>{{ $res->technology }}</td>
                    <td>{{ $res->other }}</td>
                    <td>
                        <form action="{{ route('project.destroy', $res->project_id) }}" method="POST">
                            <a href="{{ route('project.show', $res->project_id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('project.edit', $res->project_id) }}" class="btn btn-primary">Edit</a>
       
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