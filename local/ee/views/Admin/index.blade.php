
@extends('Admin.layout.main')

@section('content')
  
              <div class="container col-md-9">
            
        @foreach($demande as $demand)
                <div class="panel">
                    <div class="panel-header">
                            <h5>
                                Raison : {{$demand->raison}}
                                <button type="" class="pull-right btnshow"  value="{{$demand->id}}">Show more</button>
                            </h5>
                             <h5>Nom : {{$demand->nom}}   </h5>
                             <h5>Poste : {{$demand->poste}}   </h5>
                             <h5>Activité : {{$demand->activite}}   </h5>
                             <h5>Solution : {{$demand->solution}}   </h5>
                            <div class="panel-date pull-right">
                              Date :   {{$demand->date}} 
                            </div>
                            <div class="clearfix"></div>
                    </div>
                    <div class="panel-msg">
                        Message : {{ str_limit($demand->message,40)}} 
                    </div>
                </div>
       @endforeach
         {!! $demande->links() !!}
        
  
   
    </div>

    <div class="panel-information">
          
            <div class="row">
                <div class="col-md-3">
                    <h5>Nom : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="nom">Marouane SH</h5>
                      <button class="copy" data-clipboard-target="#nom">
                     <i class="fa fa-clipboard" aria-hidden="true"></i>
          </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Raison : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="raison">TEST</h5>
                        <button class="copy" data-clipboard-target="#raison">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <h5>Poste : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="poste">TEST</h5>
                        <button class="copy" data-clipboard-target="#poste">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <h5>email : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="email">TEST</h5>
                        <button class="copy" data-clipboard-target="#email">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Telephone Mobile : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="tel1">TEST</h5>
                        <button class="copy" data-clipboard-target="#tel1">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Home Phone : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="tel2">TEST</h5>
                        <button class="copy" data-clipboard-target="#tel2">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Activité : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="activite">TEST</h5>
                        <button class="copy" data-clipboard-target="#activite">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Solution : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="solution">TEST</h5>
                        <button class="copy" data-clipboard-target="#solution">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Attachment : </h5>
                </div>
                <div class="col-md-9">
                    <a href="" id="attach" target="_blank">Telecharger Document </a>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-3">
                    <h5>Message : </h5>
                </div>
                <div class="col-md-9">
                    <h5 id="message">TEST</h5>
                        <button class="copy" data-clipboard-target="#message">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                </div>
            </div>
           
            <i class="fa fa-times" aria-hidden="true" id="close-panel"></i>

    </div>
            

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script>
          var fullurl = "{{url('/')}}";
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
             $(".btnshow").click(function(e){
                
                var url = "getDemande/"+ $(this).val();
                $.get(url,function(data){
                    $("#raison").html(data.raison);
                    $("#nom").html(data.nom);
                    $("#email").html(data.email);
                    $("#poste").html(data.poste);
                    $("#tel1").html(data.tel1);
                     $("#tel2").html(data.tel2);
                      $("#activite").html(data.activite);
                       $("#message").html(data.message);
                       $("#solution").html(data.solution);
                       $(".panel-information").show();
                       if(data.file =="No Document")
                       {
                            $("#attach").html('No Document');
                       }
                       else
                       {
                            $("#attach").html("Telecharger le document");
                            var fileLink = data.file;
                            
                           $("#attach").attr("href", fullurl + "/" +fileLink.replace("public/", "storage/"));
                          
                       }
                       console.log(data.file);
                      
                })
               
                 
             })
             $(".panel-information #close-panel").click(function(){
                  $(".panel-information").hide();
             })
          
          </script>

          <script src="{{asset('js/clipboard.min.js')}}"></script>
          <script>
              var clipboard = new Clipboard('.copy');
          </script>
@endsection
  

