@extends('layout.header')

@section('style')

    <link href="css/Thanks.css" rel="stylesheet">

@endsection('style')

@section('content')
    <div class="jumbotron text-xs-center">
    <h1 class="display-3">Merci !</h1>
    <p class="lead">Nous Vous Contacteron Par Email ou Telephone .</p>
    <hr>
    <p>
        Vous avez besoin d'aide? <a href="">Contact us</a>
    </p>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Voir la page d'accueil</a>
    </p>
    </div>
@endsection('content')