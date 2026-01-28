@extends('layouts.main')

@section('content')
    <section>
        <h1>{{$artist->name}}</h1>
        <h2>Image: {{$artist->image_path}}</h2>
        @can('update', $artist)
            <a href="{{ route('artists.edit', ['artist' => $artist]) }} " class="border-2 border-grey-800">
                Edit
            </a>
        @endcan
        @can('delete', $artist)
            <form onsubmit="return confirm('Are you sure?')"
                action="{{ route('artists.destroy', ['artist' => $artist])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-2 border-grey-800">
                Delete
            </button>
            </form>
        @endcan
    </section>
    <section>
        <h3 class="text-2xl">Songs</h3>
        <ul>
            @forelse($artist->songs ?? [] as $song)
                <li>
                    {{ $song->title }} ({{ $song->duration }} s.)
                </li>
            @empty
                <li>ไม่มีเพลงสำหรับศิลปินท่านนี้</li>
            @endforelse
        </ul>
    </section>
@endsection
