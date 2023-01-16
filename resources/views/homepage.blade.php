@extends('layouts.MainLayout')

@section('page-title')
    {{-- Movie | --}} Homepage
@endsection

@section('main-content')
    <section class="movies-container">
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <div>{{ $movie->title }}</div>
                    <div>{{ $movie->original_title }}</div>
                    <div>{{ $movie->nationality }}</div>
                    <div>{{ $movie->date }}</div>
                    <div>{{ $movie->vote }}</div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
