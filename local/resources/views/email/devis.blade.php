<style>
h3
{
    color:red;
}

</style>

<centre>
<h3 style="color:#1CB9C8"> Raison Social : <span style="color:black">  {{$data->raison}}</span></h3>
<h3 style="color:#1CB9C8"> Nom Résponsable : <span style="color:black">  {{$data->nom}}</span></h3>
<h3 style="color:#1CB9C8"> Poste : <span style="color:black">  {{$data->poste}}</span></h3>
<h3 style="color:#1CB9C8"> Email : <span style="color:black">  {{$data->email}}</span></h3>
<h3 style="color:#1CB9C8"> Mobile : <span style="color:black">  {{$data->tel1}}</span></h3>
<h3 style="color:#1CB9C8"> Ligne Fixe : <span style="color:black">  {{$data->tel2}}</span></h3>
<h3 style="color:#1CB9C8"> Activite : <span style="color:black">  {{$data->activite}}</span></h3>
<h3 style="color:#1CB9C8"> Solution : <span style="color:black">  {{$data->solution}}</span></h3>
<h3 style="color:#1CB9C8"> Messages : <span style="color:black">  {{$data->message}}</span></h3>
<h3 style="color:#1CB9C8"> Date : <span style="color:black">  {{$data->date}}</span></h3>
</centre>

<img src="{{$message->embed('img/logo2.png')}}" width="150">