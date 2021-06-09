@extends('layouts.main')

@section('content')

    <section>
        <div class="container d-flex flex-wrap">
            @foreach ($movies as $movie)
                <div class="card m-3" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Titolo : {{ $movie->title }}</h5>
                        <h6 class="card-text">Titolo originale: {{ $movie->original_title }}</h6>
                        <h5> Voto : {{ $movie->vote }}</h5>
                        <a href="#" class="btn btn-primary">INFO</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
