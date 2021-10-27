@extends('layout.app')

@section('title', 'Home')
    


@section('content')
    <h1>Sono il contenuto di home page</h1>

    <div class="box-container">
        <div class="box-series">
            @foreach ($comics as $comic)
            <div class="card" >   
                <div class="box-img">
                    <img src="{{ $comic['thumb'] }}" >
                </div>
                <h3>{{ $comic['title'] }}</h3>
            </div>
            @endforeach
        </div>

    </div>


@endsection