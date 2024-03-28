@include('partials.nav')
<div class="container mt-2">
<hr>
    <h2>Tous les directions</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Type</th>
        <th>quota_pfe</th>
        <th>quota_im</th>
        <th>école</th>
    </tr>    
@foreach ($affectations as $affectation)
    <tr>
        <td>{{$affectation->id}}</td>
        <td>{{$affectation->nom}}</td>
        <td>{{$affectation->type}}</td>
        <td>{{$affectation->quota_pfe}}</td>
        <td>{{$affectation->quota_im}}</td>
        <td>{{$affectation->structure_iap_id}}</td>
        <td>
            <form action ="{{route('affectation.edit', $affectation->id)}}" method="GET">
                @csrf
               <button class="btn btn-success">Modifier</button>
                </form> 
        </td>
        
    </tr> 
@endforeach
</table>
<a href="/affectation/create" class="btn btn-primary">+ Nouveau Affectation</a> 
</div>