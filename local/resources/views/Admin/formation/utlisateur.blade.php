@extends('Admin.layout.main')
@section('content')
<div class="container col-md-9">
  
    
    <h3>Listes des utilisateurs inscrit </h3>
    <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Date Création</th>
        <th>Abonnement</th>
        <th>Date d'abonnement</th>
      </tr>
    </thead>
    <tbody>
        @foreach(json_decode($users,true) as $user)
            <tr @if($user['subscribed']=='1') class="success" @else class="info" @endif>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}} </td>
                    <td>{{$user['telephone']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <td>
                     @if($user['subscribed']=='1')
                        OUI
                     @else
                      NON   
                     @endif
                    </td>
                    <td>
                     @if($user['date_subscription']==null)
                        ##
                     @else
                      {{$user['date_subscription']}}
                     @endif
                     </td>
            </tr>
        @endforeach
    </tbody>
  </table>

</div>
@endsection