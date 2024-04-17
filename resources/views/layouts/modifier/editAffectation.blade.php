@include('partials.nav')

<style>
    #div{
    margin: 5px; 
    border: 2px solid black; 
    border-radius: 10px; 
    padding: 10px;
}
</style>


<div class="container mt-2">
    <hr>
    <h2>Modifier Affectation</h2>
    <hr>
    <div id="div"> 
  <form action="{{ route('affectation.update',$affectation->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$affectation->nom}}">
    </div>
    <div class="form-group">
     <h5>Séléctionner le Type :</h5>
        <!--<input type="text" class="form-control" name="type" autocomplete="off" value="{$affectation->type}}"> -->
        <select class="form-control" name="type">
            <option name="type">direction</option>
            <option name="type">département</option>
        </select>
    </div>
    <div class="form-group">
        <h5>Quota projet fin d'étude :</h5>
        <input type="text" class="form-control" name="quota_pfe" autocomplete="off" value="{{$affectation->quota_pfe}}">
    </div>
    <div class="form-group">
        <h5>Quota immersion :</h5>
        <input type="text" class="form-control" name="quota_im" autocomplete="off" value="{{$affectation->quota_im}}">
    </div>
    <div class="form-group">
        <h5>Séléctionner ID d'école :</h5>
        <!-- <input type="text" class="form-control" name="structure_iap_id" autocomplete="off" value="{$affectation->structure_iap_id}}"> -->
        <select class="form-control" name="structure_iap_id">
            @foreach($ecoles as $ecole)
            <option @if($ecole->id == $affectation->structure_iap_id) selected @endif>{{$ecole->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>
</form>
</div>
</div>

