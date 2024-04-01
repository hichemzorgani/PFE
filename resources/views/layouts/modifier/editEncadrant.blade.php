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
    <h2>Modifier Encadrant</h2>
    <hr>
  <div id="div" > 
  <form action="{{ route('encadrant.update',$encadrant->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$encadrant->nom}}">
    </div>
    <div class="form-group">
        <h5>Prenom :</h5>
        <input type="text" class="form-control" name="prenom" autocomplete="off" value="{{$encadrant->prenom}}">
    </div>
    <div class="form-group">
        <h5>Matricule :</h5>
        <input type="text" class="form-control" name="matricule" autocomplete="off" value="{{$encadrant->matricule}}">
    </div>
    <div class="form-group">
        <h5>Email :</h5>
        <input type="text" class="form-control" name="email" autocomplete="off" value="{{$encadrant->email}}">
    </div>
    <div class="form-group">
        <h5>ID Département :</h5>
        <!-- <input type="text" class="form-control" name="structure_affectation_id" autocomplete="off" value="{$encadrant->structure_affectation_id}}"> -->
        <select class="form-control" name="structure_affectation_id">
            @foreach($affectations as $affectation)
            <option @if($affectation->id == $encadrant->structure_affectation_id) selected @endif>{{$affectation->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>
</form>
</div>
</div>
