@extends('layouts.app')

@section('content')
    <div class="mapContainer" id="partiemap">
        <div id="map" class="map"></div>
        @foreach($simploniens as $simplonien)
        <div id="templatePopUpProfile" type="text/template">
            <div id="carteProfil">
                <h3>{{$simplonien->prenom}} {{$simplonien->nom}}</h3>
                <p><i class="quote left icon"></i>{{$simplonien->punchline}}<i class="quote right icon"></i></p>
                <a href="{{$simplonien->github}}"><i class="github square big grey icon"></i></a>
                <a href="{{$simplonien->linkedin}}"><i class="linkedin square big grey icon"></i></a>
                <a href="{{$simplonien->twitter}}"><i class="twitter square big grey icon"></i></a>
                <a href="{{$simplonien->blog}}"><i class="write square big grey icon"></i></a>
                <a href="{{$simplonien->sitePerso}}"><i class="linkify square big grey icon"></i></a>
                <div class="profileButton"><a class="ui fluid teal button" href="{{$simplonien->cv}}">Voir le CV</a></div>
            </div>
        </div>
        @endforeach
    </div>
@endsection