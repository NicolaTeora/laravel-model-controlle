@extends('layout.app')

@section('title', 'Movies')

@section('main-content')
  <main class="container py-4">

    <h3>more info movie</h3>
    {{dump($movie)}}
  </main>
@endsection