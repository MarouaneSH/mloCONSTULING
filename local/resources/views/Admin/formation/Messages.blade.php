@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@endsection
@section('content')

<div class="container col-md-9">
    <div class="row card card-msg">
        <h4>Listes Des Messages recu</h4>
    </div>
    <div class="row">
        @foreach(json_decode($messages,true) as $message)
            <div class="col-md-4">
                <div class="card card-msg">
                    <h5>Sujet :  {{$message['title']}}  </h5>
                    <h5>Nom : {{$message['title']}} </h5>
                    <h5>Date : {{$message['date_message']}}</h5>  
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  
                </div>
            </div>
        @endforeach        
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