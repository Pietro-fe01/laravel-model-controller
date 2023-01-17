@extends('layouts.MainLayout')

@section('page-title')
    {{ $movie->title }}
@endsection

@section('main-content')
    <section class="text-white">
        <div class="card text-dark p-3">
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
    </section>
@endsection