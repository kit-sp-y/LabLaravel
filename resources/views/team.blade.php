@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-center" style="background-color: {{ $bg_color }} ; color: {{ $text_color }}">
        {{ $teamName }}
    </h1>
@endsection
