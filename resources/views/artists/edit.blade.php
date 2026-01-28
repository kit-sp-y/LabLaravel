@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">Create new artist</h1>
    <form action="{{ route('artists.update', ['artist' => $artist]) }}" method="POST">
        @csrf
        @method('PUT')

        @error('name')
            <p class="text-red-700">
                {{ $message }}
            </p>
        @enderror
        <div>
            <label for="name">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="border bordrer-gray-800 p-2"
                    value="{{ old('name', $artist->name) }}">
        </div>

        <div>
            <button type="submit"
                    class="border rounder-sm p-2 bg-blue-200">
                Update Artist
            </button>
        </div>
    </form>
@endsection
