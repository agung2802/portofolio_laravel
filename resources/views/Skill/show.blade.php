@extends('layout')

@section('content')

    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Detail Skill</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('skill.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
            </div>
        </div>
    </div>

    <table class="text-3xl">
        <tr>
            <th class="pr-7">Kategori Skill</th>
            <td>:</td>
            <td class="pl-7">{{ $skill->skill_category }}</td>
        </tr>
        <tr>
            <th class="pr-7">Daftar Skill</th>
            <td>:</td>
            <td class="pl-7">{{ $skill->skill_name }}</td>
        </tr>
        <tr>
            <th class="pr-7">Username</th>
            <td>:</td>
            <?php
            $dashboard = DB::table('user')->where('id', $skill->id_user)->first();; 
            ?>
            <td class="pl-7">{{ $dashboard->full_name }}</td>
        </tr>
    </table>
@endsection