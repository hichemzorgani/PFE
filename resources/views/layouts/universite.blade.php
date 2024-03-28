@include('partials.nav')
<div class="container mt-2">
    <hr>
    <h2>Ajouter Université</h2>
    <hr>
  <form action="{{ route('universite.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Wilaya</label>
        <input type="text" class="form-control" name="wilaya" autocomplete="off">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>    
</form>
</div>
<div class="container mt-2">
<hr>
    <h2>Toutes les Universités</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Wilaya</th>
    </tr>    
@foreach ($universites as $universite)
    <tr>
        <td>{{$universite->id}}</td>
        <td>{{$universite->nom}}</td>
        <td>{{$universite->wilaya}}</td>
        <td>
            <form action ="{{route('universite.edit',$universite->id)}}" method="GET">
            @csrf
           <button class="btn btn-success">Modifier</button>
            </form>
        </td>
        <td>
            <form action ="{{route('universite.destroy', $universite->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <button class="btn btn-danger">Supprimer</button>
                </form> 
        </td>
    </tr> 
@endforeach
</table>
</div>