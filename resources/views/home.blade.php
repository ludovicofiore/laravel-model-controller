{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection



@section('content')
    <div class="container my-5">
        <h1>Title</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, molestiae? Assumenda vero necessitatibus
            qui sequi, dolorum sed eligendi praesentium magni quibusdam labore doloribus harum, quaerat officia voluptatum
            atque, placeat numquam?
        </p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
