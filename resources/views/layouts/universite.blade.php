@include('partials.nav')

<style>
    *{
        font-family: Tahoma, sans-serif;
    }
</style>

<div class="container mt-2">
    <style>
        #div{
        margin: 5px; 
        border: 2px solid black; 
        border-radius: 10px; 
        padding: 10px;
    }
    </style>
    <hr>
    <h2>Ajouter une nouvelle Université :</h2>
    <hr>
  <div id="div"> 
  <form action="{{ route('universite.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Wilaya :</h5>
        <!-- <input type="text" class="form-control" name="wilaya" autocomplete="off"> -->
        <select class="form-control" name="wilaya">
            <option value="Adrar">01. Adrar</option>
            <option value="Chlef">02. Chlef</option>
            <option value="Laghouat">03. Laghouat </option>
            <option value="Oum El Bouaghi">04. Oum El Bouaghi</option>
            <option value="Batna">05. Batna</option>
            <option value="Bejaïa">06. Bejaïa</option>
            <option value="Biskra">07. Biskra</option>
            <option value="Béchar">08. Béchar</option>
            <option value="Blida">09. Blida</option>
            <option value="Bouira">10. Bouira</option>
            <option value="Tamanrasset">11. Tamanrasset </option>
            <option value="Tebessa">12. Tebessa</option>
            <option value="Tlemcen">13. Tlemcen</option>
            <option value="Tiaret">14. Tiaret</option>
            <option value="Tizi Ouzou">15. Tizi Ouzou</option>
            <option value="Alger">16. Alger</option>
            <option value="Djelfa">17. Djelfa</option>
            <option value="Djijel">18. Djijel</option>
            <option value="Sétif">19. Sétif</option>
            <option value="Saïda">20. Saïda</option>
            <option value="Skikda">21. Skikda</option>
            <option value="Sidi Bel Abbès">22. Sidi Bel Abbès</option>
            <option value="Annaba">23. Annaba</option>
            <option value="Guelma">24. Guelma</option>
            <option value="Constantine">25. Constantine</option>
            <option value="Médéa">26. Médéa</option>
            <option value="Mostaganem">27. Mostaganem</option>
            <option value="M'Sila">28. M'Sila </option>
            <option value="Mascara">29. Mascara</option>
            <option value="Ouargla">30. Ouargla</option>
            <option value="Oran">31. Oran</option>
            <option value="El Bayadh">32. El Bayadh</option>
            <option value="Illizi">33. Illizi</option>
            <option value="Bordj Bou Arreridj">34. Bordj Bou Arreridj</option>
            <option value="Boumerdès">35. Boumerdès</option>
            <option value="El Tarf">36. El Tarf</option>
            <option value="Tindouf">37. Tindouf</option>
            <option value="Tissemsilt">38. Tissemsilt</option>
            <option value="El Oued">39. El Oued</option>
            <option value="Khenchela">40. Khenchela</option>
            <option value="Souk Ahras">41. Souk Ahras</option>
            <option value="Tipaza">42. Tipaza</option>
            <option value="Mila">43. Mila</option>
            <option value="Aïn Defla">44. Aïn Defla</option>
            <option value="Naâma">45. Naâma</option>
            <option value="Aïn Témouchent">46. Aïn Témouchent</option>
            <option value="Ghardaia">47. Ghardaia</option>
            <option value="Relizane">48. Relizane</option>
            <option value="Timimoun">49. Timimoun</option>
            <option value="Bordj Badji Mokhtar">50. Bordj Badji Mokhtar</option>
            <option value="Ouled Djellal">51. Ouled Djellal</option>
            <option value="Béni Abbès">52. Béni Abbès </option>
            <option value="In Salah">53. In Salah</option>
            <option value="In Guezzam">54. In Guezzam</option>
            <option value="Touggourt">55. Touggourt</option>
            <option value="Djanet">56. Djanet</option>
            <option value="El M'Ghair">57. El M'Ghair</option>
            <option value="El Meniaa">58. El Meniaa</option>
          </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning my-2" value="Ajouter" name="ajouter">
    </div>    
</form>
</div>
</div>
<div class="container mt-2">
<hr>
    <h2>Toutes les Universités :</h2>
<hr>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Wilaya</th>
        <th>Modification</th>
        <th>Supression</th>
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
<br>
<br>