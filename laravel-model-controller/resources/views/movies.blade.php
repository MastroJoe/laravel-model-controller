@extends('layouts.app')

@section('main')
<section class="movies-container container-fluid">
  <h1>Movies</h1>
  <!-- card section -->
  <div class="card-container container-center">
    <!-- stampo tutte le cards con foreach -->
    @foreach ($movies as $movie)
      <div class="card pt-50">
        <h2>{{ $movie->title }}</h2>
        <h2 class="italic">{{ $movie->original_title }}</h2>
        <h4>{{ $movie->nationality }}</h4>
        <h4>{{ $movie->date }}</h4>
        <h1>{{ $movie->vote }}</h1>
      </div>
    @endforeach
  </div>
</section>
@endsection
