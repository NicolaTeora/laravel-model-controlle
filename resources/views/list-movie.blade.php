@extends('layout.app')

@section('title', '- movie list')

@section('main-content')

    <div class="container">
        <div class="row g-2">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card h-100 p-2">
                        <ul>
                            <li>
                                <h5>{{$movie->original_title}}</h5>
                            </li>
                            <li>
                                <b>Nationality: </b>{{$movie->nationality}}
                            </li>
                            <li>
                                <b>Vote: </b>{{$movie->vote}}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
@endsection