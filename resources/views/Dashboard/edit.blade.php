@extends('layout')

@section('content')
<div class="mt-5">
    <div class="">
        <div class=" w-full">
            <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Edit Data</h2>
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

    <form action="{{ route('dashboard.update', $dashboard->id) }}" method="post" class="mt-3">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="full_name" value="{{ $dashboard->full_name }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Objektif:</strong>
                    <input class="form-control" name="self_objective" placeholder="Objektif" value="{{ $dashboard->self_objective }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat: </strong>
                    <textarea name="address" class="form-control" placeholder="Alamat" id="floatingTextarea" style="height: 100px">{{ $dashboard->address }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                @if(isset($dashboard) && $dashboard->photo)
                    <div>
                        <strong>Current Image:</strong>
                        <div class="w-56 h-56 bg-white rounded-lg">
                            <img src="{{ asset('storage/' . $dashboard->photo) }}" alt="Existing Image" id="preview" class="image-preview">
                        </div>
                    </div>

                @else
                    <div>
                        <strong>Current Image:</strong>
                        <div class="w-56 h-56 bg-white rounded-lg">
                            <img src="" alt="Existing Image" id="preview" class="image-preview" style="display: none">
                        </div>
                    </div>
                @endif
                <div class="form-group mt-3">
                    <input type="file" name="photo" class="form-control" id="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*" onchange="previewImage(event)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </div>
        </div>
        <script>
            function previewImage(event) {
                var reader = new FileReader();
                var preview = document.getElementById('preview');
    
                reader.onload = function() {
                    console.log(reader.result);
                    
                    preview.src = reader.result;
                    preview.style.display = 'block';
                    preview.property('hidden', false);
                };
    
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </form>

    @endsection