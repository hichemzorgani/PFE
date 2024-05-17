@include('partials.nav2')
<div class="container mt-2">
    <hr>
    <h2>Cloture</h2>
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

    <tr>
        <td rowspan="{{ $stagiaires->where('stage_id', $stage->id)->count() + 1 }}" >
            {{ $stage->theme }} 
            
            
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

    </table>

    <form action="{{ route('stage.done', $stage->id) }}" method="POST" onsubmit="return validateForm()">
        @csrf
        @method('POST')
        <hr>
        <h3>Dépôt de mémoire</h3>
        <label for="memoire">
            <input value="1" type="checkbox" id="memoire" name="memoire" required>
            Dépôt de mémoire effectué
        </label>
        <hr>
        <br>
        <h3>La quitus des stagiaires</h3>
        @foreach ($stagiaires->where('stage_id', $stage->id) as $stagiaire)
            <label for="quitus_{{ $stagiaire->id }}">
                <input value="{{ $stagiaire->id }}" type="checkbox" id="quitus_{{ $stagiaire->id }}" name="quitus[]">
                {{ $stagiaire->first_name }} {{ $stagiaire->last_name }} - Quitus obtenu
            </label>
            <br>
        @endforeach
        <hr>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Cloturer" name="Cloturer">
        </div>
    </form>
    
    <script>
    function validateForm() {
        const memoireCheckbox = document.getElementById('memoire');
        if (!memoireCheckbox.checked) {
            alert('Please confirm the Dépôt de mémoire.');
            return false;
        }
    
        const quitusCheckboxes = document.querySelectorAll('input[name="quitus[]"]');
        const oneQuitusChecked = Array.from(quitusCheckboxes).some(checkbox => checkbox.checked);
        
        if (!oneQuitusChecked) {
            alert('il faut au minimum un stagiaire obtenu la quitus');
            return false;
        }
    
        return true; // Allow form submission
    }
    </script>
    
    
</div>