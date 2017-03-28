@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
@endsection
@section('content')
<div class="container col-md-9">
    <iframe src="http://localhost:8000/api/PostBiblio?key=MarouaneSH-api" scrolling="no" frameborder="0" style="width:100%;height:900px">
    </iframe>
</div>
@endsection