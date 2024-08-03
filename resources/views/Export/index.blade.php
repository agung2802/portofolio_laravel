@extends('layout')

@section('content')
<?php
$dashboard = DB::table('user')->get();
?>

<div class="mt-5">
    <div class="">
        <div class=" w-full">
            <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Download CV</h2>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="input-group">
        <select class="form-select" aria-label="Example select with button addon" name="id_user" id="id_user">
            <option selected hidden>Select User</option>
            @foreach ($dashboard as $user)
            <option value="{{ $user->id }}">{{ $user->full_name }}</option>
            @endforeach
        </select>
        <a class="btn btn-success" href="{{ route('export.generatePdf') }}">Button</a>
    </div>
    {{-- <script>
        function setLocalStorage() {
            
            var e = document.getElementById("id_user");
            // console.log(value);
            localStorage.setItem('id', e.value); 
            fetch('./template.blade.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ id: e.value })
            })
            .then(response => response.json())
            .then(data => console.log('Success:', data))
            .catch((error) => console.error('Error:', error));
        }
    </script> --}}
</div>

@endsection