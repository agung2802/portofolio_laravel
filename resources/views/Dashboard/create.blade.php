@extends('layout')

@section('content')
<div class="mt-5">
    <div class="">
        <div class=" w-full">
            <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Add Data</h2>
        </div>

        <div class="mt-3">
            <a href="{{ route('dashboard.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
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

<form action="{{ route('dashboard.store') }}" method="POST" class="mt-3" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Nama Lengkap: </strong>
            <input type="text" name="full_name" placeholder="Nama Lengkap" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Objektif: </strong>
            <input type="text" name="self_objective" placeholder="Objektif" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Alamat: </strong>
            <textarea name="address" class="form-control" placeholder="Alamat" id="floatingTextarea"></textarea>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Photo: </strong>
            <div>
                <strong>Current Image:</strong>
                <div class="w-56 h-56 bg-white rounded-lg">
                    <img id="preview" class="image-preview" alt="Image Preview" style="display: none">
                </div>
            </div>
            <input type="file" name="photo" class="form-control mt-3" id="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*" onchange="previewImage(event)">
            {{-- <input type="text" name="photo" placeholder="Photo" class="form-control"> --}}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success float-right">Submit</button>
        </div>
    </div>

    <script>
        // Function to preview the image
        function previewImage(event) {
            var reader = new FileReader();
            var preview = document.getElementById('preview');

            reader.onload = function() {
                // Display the image preview
                console.log(reader.result);
                
                preview.src = reader.result;
                preview.style.display = 'block';
                preview.property('hidden', false);
            };

            // Read the image file as a data URL
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</form>
@endsection