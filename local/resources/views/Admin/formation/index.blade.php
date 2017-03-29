@extends('Admin.layout.main')
@section('style')
<link rel="stylesheet" href="{{asset('css/cssFormation.css')}}">
@endsection
@section('content')
<div class="container col-md-9">

<div class="row">
        <div class="col-md-6">
        
            <a href="{{route('formation_users')}}">
                <div class="card">
                        <h5><i class="fa fa-users" aria-hidden="true"></i></h5>
                        <h4>Utilisateur Inscrit</h4>
                </div>
            </a>
            <div class="card">
                 <a href="{{route('formation_messages')}}">
                    <h5><i class="fa fa-comment" aria-hidden="true"></i></h5>
                    <h4>Messages Recu</h4>
                 </a>
            </div>
            <div class="card">
                 <a href="{{route('formation_cours')}}">
                    <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i></h5>
                    <h4>Listes des Cours Ajouté</h4>
                 </a>
            </div>
            <div class="card">
                 <a href="{{route('getPaiement')}}">
                    <h5><i class="fa fa-credit-card-alt" aria-hidden="true"></i></h5>
                    <h4>Listes des codes de paiements</h4>
                 </a>
            </div>
            <div class="card">
                 <a href="{{route('getDemandeVerfication')}}">
                    <h5><i class="fa fa-check-circle" aria-hidden="true"></i></h5>
                    <h4>Listes des demandes de verification</h4>
                 </a>
            </div>
            <div class="card">
                 <a href="{{route('Problems')}}">
                    <h5><i class="fa fa-exclamation" aria-hidden="true"></i></h5>
                    <h4>Report problem</h4>
                 </a>
            </div>
        </div>
        <div class="col-md-4">
           <div class="card" style="text-align:left;cursor:pointer" id="addBook">
         
                 <h4><i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>Ajouter un Cours</h4>
          
           </div>
         
           <div class="card" style="text-align:left;cursor:pointer" id="addCode">
         
                 <h4><i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>Ajouter un Code de paiement</h4>
          
           </div>
           <a href="{{route('Addmessage')}}">
                <div class="card" style="text-align:left;cursor:pointer" id="addNewMsg">       
                        <h4><i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>Envoyer un nouveau message</h4>
                </div>
           </a>
           <a href="{{route('postDocBiblio')}}">
                <div class="card" style="text-align:center;cursor:pointer" id="addNewMsg">       
                        <h4><i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>Ajouter un nouveau document au bibliotheque</h4>
                </div>
           </a>
        </div>
</div>

<div class="addNewCours" style="display:none;">
        <i class="fa fa-times exit" aria-hidden="true"></i>
        <iframe src="http://localhost:8000/api/AddBooks?key=MarouaneSH-api" frameborder="0"></iframe>
</div>

<div class="addnewCode">
        <i class="fa fa-times exit" style="color:white;font-size:30px;right:10px" aria-hidden="true"></i>
        <form action="" id="formaddNewCode">
                
                {{csrf_field()}}
                <button style="margin-top:80px" type="submit">Generer Un code de paiement</button>
                <h3 style="margin-top:80px;display:none">Code a été génerer avec success</h3>
                <h2 style="display:none">ssdsdsqsxwxqqdq</h2>
        </form>
</div>
<div class="loading" style="top:25%k;position:fixed">
                        
                                
                                <svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-squares"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="15" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.0s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.125s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.25s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.875s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.375" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.75s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.625s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.5s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect></svg>

                                
                </div>

@endsection


@section('script')
<script>
        $(document).ready(function(){
                $(".exit").click(function(e){
                      $(this).parent().hide();
                       
                })
                $("#addBook").click(function(){
                    $(".addNewCours").show();
                })
                $("#addCode").click(function(){
                   $(".addnewCode").show();
                })
                $("#formaddNewCode").submit(function(e){
                        e.preventDefault();
                        $.ajax({
                                url:"{{route('addPaeiment')}}",
                                type:"POST",
                                beforeSend:function(){
                                 $(".loading").show();
                                },
                                data:{_token:"{{csrf_token()}}"},
                                success:function(data){
                                   $(".loading").hide();
                                  
                                   $("#formaddNewCode h2").show();
                                   $("#formaddNewCode h3").show();
                                    $("#formaddNewCode h2").html(data.code);
                                   $("#formaddNewCode button").hide();
                                },
                                error:function(){
                                   alert("Something Wrong Please Contact Developer");
                                }
                        })
                })
        })
        
</script>
@endsection