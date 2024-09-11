@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>film ordinati</h1>

        <div class="container d-flex flex-wrap">

            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <p class="card-text">{{ $movie->nationality }}
                        </p>
                        <h6>{{ $movie->date }}</h6>
                        <h5>{{ $movie->vote }}</h5>

                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection


@section('titlePage')
    order
@endsection
