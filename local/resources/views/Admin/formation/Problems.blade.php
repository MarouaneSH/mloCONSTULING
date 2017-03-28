@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
<style>
.panel-heading
{
       background-color: #19B395 !important;
       color:white;
}
.panel-title a
{
    color:white;
}
.panel-body , .panel-footer
{
   
}
</style>
@endsection
@section('content')
<div class="container col-md-9">

    @foreach(json_decode($problems,true) as $problem)
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#s{{ $problem['id']}}">{{ $problem['NomUser']}} a signaler un problem</a>
                </h4>
                </div>
                <div id="s{{ $problem['id']}}" class="panel-collapse collapse">
                <div class="panel-body">Téléphone : {{ $problem['telephone']}}</div>

                <div class="panel-body">Date : {{ $problem['date']}}</div>
                <div class="panel-body">Document : @if($problem['linkAttach']) <a href="http://localhost:8000{{$problem['linkAttach']}}" download>Telecharger</a> @else Non @endif</div>
                <div class="panel-footer">Message : {{ $problem['comment']}}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection