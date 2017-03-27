@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
@endsection
@section('content')
<div class="container col-md-9">
 <table class="table">
    <thead>
      <tr>
        <th>Nom utilisateur</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Nom de payeur</th>
        <th>Date Demande</th>
        <th>Date Paiement</th>
        <th>Banque</th>
      </tr>
    </thead>
    <tbody>
   
  @foreach(json_decode($demandes,true) as $demande)
           @if($demande['verification_paiement']!=null)
              @foreach($demande['verification_paiement'] as $demande_verfication)
                  <tr>
                    <td>{{$demande['name'] }}</td>
                    <td>{{$demande['email'] }}</td>
                    <td>{{$demande['telephone'] }}</td>
                    <td>{{$demande_verfication['name_payeur']}} </td>
                    <td>{{$demande_verfication['date_demande']}} </td>
                    <td>{{$demande_verfication['date_paiement']}} </td>
                    <td>{{$demande_verfication['banque']}} </td>
                  </tr>
                @endforeach
             @endif
            
        @endforeach
        </tbody>
  </table>

</div>

@endsection

@section('script')


@endsection