@extends('Admin.layout.main')
@section('content')
<div class="container col-md-9">
  
    
    {{$users}}
     @foreach(json_decode($users,true) as $user)
       Nom : {{$user['name']}} <br>
       Prenom : {{$user['email']}} <br>
    @endforeach
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach(json_decode($users,true) as $user)
            <tr @if($user['subscribed']=='0') class="success" @else class="info" @endif>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}} </td>
                    <td>{{$user['subscribed']}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>

</div>
@endsection