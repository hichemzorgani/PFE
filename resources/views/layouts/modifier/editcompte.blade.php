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
    <h2>Modifier compte</h2>
    <hr>
  <div id="div">  
  <form action="{{ route('compte.update',$compte->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <h5>Utilisateur :</h5>
        <input type="text" class="form-control" name="utilisateur" autocomplete="off" value="{{$compte->utilisateur}}">
    </div>
    <div class="form-group">
        <h5>Mot de passe :</h5>
        <input type="text" class="form-control" name="password" autocomplete="off" value="{{$compte->password}}">
    </div>
    <div class="form-group">
        <h5>Type de compte :</h5>
        <!-- <input type="text" class="form-control" name="type_compte" autocomplete="off" value="{$compte->type_compte}}"> -->
        <select class="form-control" name="type_compte">
            <option @if($compte->type_compte == 1) selected @endif>1</option>
            <option @if($compte->type_compte == 2) selected @endif>2</option>
            <option @if($compte->type_compte == 3) selected @endif>3</option>
          </select>
    </div>
    <div class="form-group">
        <h5>ID école :</h5>
        <!-- <input type="text" class="form-control" name="structure_iap_id" autocomplete="off" value="{$compte->structure_iap_id}}"> -->
        <select class="form-control" name="structure_iap_id">
            @foreach($ecoles as $ecole)
            <option @if($compte->structure_iap_id == $ecole->id) selected @endif>{{$ecole->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>
</form>
</div>
</div>




