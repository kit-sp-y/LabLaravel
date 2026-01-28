@extends('layouts.main')

@section('content')
    <section class="container mx-auto w-[80%">
        <h1 class="text-2xl">Artist list</h1>

        @can('create', App\Models\Artist::class)
        <div class="my-2">
            <a href="{{ route('artists.create') }}" class="px-4 py-2 border bg-blue-200">
                + New Artist
            </a>
        </div>
        @endcan

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>image</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $artist->image_path }}</td>
                        <td>
                            <a href="{{ route('artists.show', ['artist' => $artist]) }}">
                                {{ $artist->name }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </section>
@endsection
