@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
@endsection
@section('content')
<div class="container col-md-9">
 <table class="table">
    <thead>
      <tr>
        <th>Code</th>
        <th>Utilisé</th>

      </tr>
    </thead>
    <tbody>
  @foreach(json_decode($codes,true) as $code)
            <tr @if($code['used']=='1') class="success" @else class="danger" @endif>
                    <td>{{$code['code']}}</td>
                     @if($code['used']=='1') 
                    <td>Oui</td>
                     @else<td>Non</td>@endif
            </tr>
        @endforeach
        </tbody>
  </table>

</div>

@endsection

@section('script')


@endsection