@extends('layout.layoutBase')

@section('pageTitle')
    Home    
@endsection

@section('pageContent')
    <div class="main-content">
        <h3>Lista Film</h3>
        <div class="card-container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h4>TITOLO: {{$movie['title']}}</h4>
                    <h4>TITOLO ORIGINALE: {{$movie['original_title']}}</h4>
                    <h5>NAZIONALITÀ: {{$movie['nationality']}}</h5>
                    <h5>DATA: {{$movie['date']}}</h5>
                    <h5>VOTO: {{$movie['vote']}}</h5>
                </div>
            @endforeach
        </div>
    </div>
@endsection
