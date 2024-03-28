@include('partials.nav')
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
<a href="/universite/create" class="btn btn-primary">+ Nouvelle Université</a> 
</div>