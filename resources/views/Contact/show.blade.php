@extends('layout')

@section('content')

    <div class="mt-5">
        <div class="">
            <div class=" w-full">
                <h2 class="text-4xl font-bold underline" style="text-decoration-color: #8B0000">Detail Kontak</h2>
            </div>

            <div class="mt-3">
                <a href="{{ route('contact.index') }}" class="btn bg-red-950 text-white hover:bg-red-800">Back</a>
            </div>
        </div>
    </div>

    <table class="text-3xl">
        <tr>
            <th class="pr-7">Jenis Kontak</th>
            <td>:</td>
            <td class="pl-7">{{ $contact->contact_type }}</td>
        </tr>
        <tr>
            <th class="pr-7">Link Kontak</th>
            <td>:</td>
            <td class="pl-7">{{ $contact->contact_value }}</td>
        </tr>
        <tr>
            <th class="pr-7">Username</th>
            <td>:</td>
            <?php
            $dashboard = DB::table('user')->where('id', $contact->id_user)->first();; 
            ?>
            <td class="pl-7">{{ $dashboard->full_name }}</td>
        </tr>
    </table>
@endsection