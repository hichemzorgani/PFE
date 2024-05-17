@include('partials.nav2')
<div class="container mt-2">
    <hr>
    <h2>Tous les Stages</h2>
    <hr>
    <table class="table table-bordered ">
        <tr style="background-color:green">
            <th>Theme</th>
            
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Lieu de naissance</th>
            <th>Encadrant ID</th>
            <th>Email</th>
            <th>Groupe sanguin</th>
        </tr>  
        @php $key = 0; @endphp
@foreach ($stages as $stage)
    <tr>
        <td rowspan="{{ $stagiaires->where('stage_id', $stage->id)->count() + 1 }}" 
            @if ($key % 2 == 0) style="background-color: rgb(255, 166, 1);" 
            @else style="background-color: rgb(207, 135, 0);"  @endif>
            {{ $stage->theme }} 
            
            <form action ="{{route('Stage.cloture', $stage->id)}}" method="GET">
                @csrf
                
               <button class="btn btn-success" name="cloturer" type="submit">Cloture</button>
                </form>   
        </td>
        @foreach ($stagiaires->where('stage_id', $stage->id) as $stagiaire)
            <tr>
                <td>{{ $stagiaire->first_name }}</td>
                <td>{{ $stagiaire->last_name }}</td>
                <td>{{ $stagiaire->date_of_birth }}</td>
                <td>{{ $stagiaire->place_of_birth }}</td>
                <td>{{ $stagiaire->stage->encadrant->nom }}</td>
                <td>{{ $stagiaire->email }}</td>
                <td>{{ $stagiaire->blood_group }}</td>
            </tr>
        @endforeach
    </tr>
    @php $key++; @endphp
@endforeach
    </table>
</div>
