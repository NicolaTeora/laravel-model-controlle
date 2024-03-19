@extends('layout.app')

@section('title', '- movie list')

@section('main-content')
@dump($movies)
    <div class="container">
        <div class="row g-2">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card h-100 p-2">
                        <h4>{{$movie->original_title}}</h4>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
@endsection