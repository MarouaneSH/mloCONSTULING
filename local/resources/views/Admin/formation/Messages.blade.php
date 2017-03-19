@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@endsection
@section('content')

<div class="container col-md-9">
    <!--<div class="row">
        <div class="col-md-4">
            <div class="card card-msg">
                <h5>User Name :</h5>
                <h5>Sujet :</h5>
                <h5>Date :</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-msg">
                <h5>User Name :</h5>
                <h5>Sujet :</h5>
                <h5>Date :</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-msg">
                <h5>User Name :</h5>
                <h5>Sujet :</h5>
                <h5>Date :</h5>
            </div>
        </div>-->
         <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>comment</th>
            </tr>
            </thead>
            <tbody>
                @foreach(json_decode($messages,true) as $message)
                    <tr>
                        <td>  {{$message['id']}} </td>
                        <td> {{$message['title']}}</td>
                        <td> {{$message['comment']}}</td>
                    </tr>
                    <!--here Iwant to use pagination-->
                @endforeach
            </tbody>
        <table> 
    








</div>
</div>

@endsection

@section('script')
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){

    $("#table").DataTable(
        {
            "ajax":"http://localhost:90/api/getMessages?&key=MarouaneSH-api",
            "columns": [
               "id"
            ]
        }   
    )
})


</script>
@endsection