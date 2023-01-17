@extends('layouts.MainLayout')

@section('page-title')
    {{-- Movie | --}} Homepage
@endsection

@section('main-content')
    <section class="movies-container text-white py-5">
        <div class="container d-flex flex-wrap">
            @foreach ($movies as $movie)
                <a href="{{ route('_singlemovie', $movie->id) }}" class="card text-dark movie-card mb-5 p-2 text-decoration-none">
                    <div>
                        <div>
                            <strong>Title:</strong>
                            {{ $movie->title }}
                        </div>
                        <div>
                            @if ($movie->title !== $movie->original_title)
                                <strong>Original title:</strong>
                                {{ $movie->original_title }}
                            @endif
                        </div>
                        <div>
                            <strong>Nationality:</strong>
                            {{ $movie->nationality }}
                        </div>
                        <div>
                            <strong>Date:</strong>
                            {{ $movie->date }}
                        </div>
                        <div>
                            <strong>Vote:</strong>
                            @for ($i = 1; $i <= 5 ; $i++)
                                @if ( round($movie->vote / 2) < $i )
                                <i class="fa-regular fa-star"></i>
                                @else
                                <i class="fa-solid fa-star"></i>
                                @endif
                            @endfor
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
