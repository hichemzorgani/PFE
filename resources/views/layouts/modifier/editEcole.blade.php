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
    <h2>Modifier école</h2>
    <hr>
  <div id="div">
  <form action="{{ route('ecole.update',$ecole->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off" value="{{ $ecole->nom }}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>    
</form>
</div>
</div>
