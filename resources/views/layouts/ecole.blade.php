@include('partials.nav')
<div class="container mt-2">
<hr>
    <h2>Tous les écoles</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
    </tr>    
@foreach ($ecoles as $ecole)
    <tr>
        <td>{{$ecole->id}}</td>
        <td>{{$ecole->nom}}</td>
        <td>
            <form action ="{{route('ecole.edit', $ecole->id)}}" method="GET">
                @csrf
               <button class="btn btn-success">Modifier</button>
                </form> 
        </td>
    </tr> 
@endforeach
</table>
<a href="/ecole/create" class="btn btn-primary">+ Nouveau école</a> 
</div>