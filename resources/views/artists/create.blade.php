@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">Create new artist</h1>
    <form action="{{ route('artists.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            @error('name')
                <p class="text-red-700">
                    {{ $message }}
                </p>
            @enderror
            <input type="text"
                   name="name"
                   id="name"
                   value="{{ old('name', '') }}"
                   class="border border-gray-800 p-2 @error('name') border-2 border-red-500 @enderror">
        </div>

        <div>
            <button type="submit"
                    class="border rounder-sm p-2 bg-blue-200">
                Add Artist
            </button>
        </div>
    </form>
@endsection
