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
        <th>Par</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
   
  @foreach(json_decode($codes,true) as $code)
            <tr @if($code['used']=='1') class="success" @else class="danger" @endif>
                    <input type="hidden" value="{{$code['id']}}" class="id">
                    <td>{{$code['code']}}</td>
                     @if($code['used']=='1') 
                     <td> Oui</td>
                     <td>{{$code['user']['name']}}</td>
                     <td class="remove"><i class="fa fa-times" aria-hidden="true"></i></td>
                     @else
                     <td>Non</td>
                     <td>##</td>
                     <td class="remove"><i class="fa fa-times" aria-hidden="true" style="cursor: pointer;"></i></td>
                     @endif

            </tr>
        @endforeach
        </tbody>
  </table>

</div>

@endsection

@section('script')
<script>
$(".remove").click(function(){
  
  if(confirm("Vous voulez vraiment supprimer ce code ? "))
  {
       $(this).parent().parent().hide();
       $.ajax({
          url : "{{route('removePaiement')}}",
          data:{id:$(".id").val()},
          success:function(){
             $(this).parent().html("");
            alert("success");
           
          },
          error:function(){
            alert("Un erreur s'est produit");
          }
      })
    }
   
})

</script>

@endsection