<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body style="background-image: url({{ asset('assets/images/background.jpg') }});" class="bg-contain">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="flex flex-row h-screen">
        <nav class="bg-sidebar p-4 w-1/5 self-center h-5/6 fixed text-white rounded-r-lg">
            <h1 class="text-3xl font-bold ">
                Portofolio Admin
            </h1>
            <ul class="rounded-lg border-white border-1 border-solid h-1/2 flex flex-col justify-evenly mt-4">
                <li class="w-fit px-3 mx-auto underline font-bold  hover:bg-white hover:text-black hover:rounded-md"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="w-fit px-3 mx-auto underline font-bold hover:bg-white hover:text-black hover:rounded-md"><a href="{{ route('project.index') }}">Project</a></li>
                <li class="w-fit px-3 mx-auto underline font-bold hover:bg-white hover:text-black hover:rounded-md"><a href="{{ route('skill.index') }}">Skill</a></li>
                <li class="w-fit px-3 mx-auto underline font-bold hover:bg-white hover:text-black hover:rounded-md"><a href="{{ route('contact.index') }}">Contact</a></li>
                <li class="w-fit px-3 mx-auto underline font-bold hover:bg-white hover:text-black hover:rounded-md"><a href="{{ route('export.index') }}">Export</a></li>
            </ul>
        </nav>
        <div class="w-3/4 h-screen p-4 ml-80">
            @yield('content')
        </div>
    </div>
</body>
</html>