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
    <h2>Modifier Université</h2>
    <hr>
  <div id="div">
  <form action="{{ route('universite.update',$universite->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$universite->nom}}">
    </div>
    <div class="form-group">
        <h5>Wilaya :</h5>
        <!-- <input type="text" class="form-control" name="wilaya" autocomplete="off" value="{$universite->wilaya}}"> -->
        <select class="form-control" name="wilaya">
            <option value="Adrar" @if($universite->wilaya == "Adrar") selected @endif>01. Adrar</option>
            <option value="Chlef" @if($universite->wilaya == "Chlef") selected @endif>02. Chlef</option>
            <option value="Laghouat" @if($universite->wilaya == "Laghouat") selected @endif>03. Laghouat </option>
            <option value="Oum El Bouaghi" @if($universite->wilaya == "Oum El Bouaghi") selected @endif>04. Oum El Bouaghi</option>
            <option value="Batna" @if($universite->wilaya == "Batna") selected @endif>05. Batna</option>
            <option value="Bejaïa" @if($universite->wilaya == "Bejaïa") selected @endif>06. Bejaïa</option>
            <option value="Biskra" @if($universite->wilaya == "Biskra") selected @endif>07. Biskra</option>
            <option value="Béchar" @if($universite->wilaya == "Béchar") selected @endif>08. Béchar</option>
            <option value="Blida" @if($universite->wilaya == "Blida") selected @endif>09. Blida</option>
            <option value="Bouira" @if($universite->wilaya == "Bouira") selected @endif>10. Bouira</option>
            <option value="Tamanrasset" @if($universite->wilaya == "Tamanrasset") selected @endif>11. Tamanrasset </option>
            <option value="Tebessa" @if($universite->wilaya == "Tebessa") selected @endif>12. Tebessa</option>
            <option value="Tlemcen" @if($universite->wilaya == "Tlemcen") selected @endif>13. Tlemcen</option>
            <option value="Tiaret" @if($universite->wilaya == "Tiaret") selected @endif>14. Tiaret</option>
            <option value="Tizi Ouzou" @if($universite->wilaya == "Tizi Ouzou") selected @endif>15. Tizi Ouzou</option>
            <option value="Alger" @if($universite->wilaya == "Alger") selected @endif>16. Alger</option>
            <option value="Djelfa" @if($universite->wilaya == "Djelfa") selected @endif>17. Djelfa</option>
            <option value="Djijel" @if($universite->wilaya == "Djijel") selected @endif>18. Djijel</option>
            <option value="Sétif" @if($universite->wilaya == "Sétif") selected @endif>19. Sétif</option>
            <option value="Saïda" @if($universite->wilaya == "Saïda") selected @endif>20. Saïda</option>
            <option value="Skikda" @if($universite->wilaya == "Skikda") selected @endif>21. Skikda</option>
            <option value="Sidi Bel Abbès" @if($universite->wilaya == "Sidi Bel Abbès") selected @endif>22. Sidi Bel Abbès</option>
            <option value="Annaba" @if($universite->wilaya == "Annaba") selected @endif>23. Annaba</option>
            <option value="Guelma" @if($universite->wilaya == "Guelma") selected @endif>24. Guelma</option>
            <option value="Constantine" @if($universite->wilaya == "Constantine") selected @endif>25. Constantine</option>
            <option value="Médéa" @if($universite->wilaya == "Médéa") selected @endif>26. Médéa</option>
            <option value="Mostaganem" @if($universite->wilaya == "Mostaganem") selected @endif>27. Mostaganem</option>
            <option value="M'Sila" @if($universite->wilaya == "M'Sila") selected @endif>28. M'Sila </option>
            <option value="Mascara" @if($universite->wilaya == "Mascara") selected @endif>29. Mascara</option>
            <option value="Ouargla" @if($universite->wilaya == "Ouargla") selected @endif>30. Ouargla</option>
            <option value="Oran" @if($universite->wilaya == "Oran") selected @endif>31. Oran</option>
            <option value="El Bayadh" @if($universite->wilaya == "El Bayadh") selected @endif>32. El Bayadh</option>
            <option value="Illizi" @if($universite->wilaya == "Illizi") selected @endif>33. Illizi</option>
            <option value="Bordj Bou Arreridj" @if($universite->wilaya == "Bordj Bou Arreridj") selected @endif>34. Bordj Bou Arreridj</option>
            <option value="Boumerdès" @if($universite->wilaya == "Boumerdès") selected @endif >35. Boumerdès</option>
            <option value="El Tarf" @if($universite->wilaya == "El Tarf") selected @endif>36. El Tarf</option>
            <option value="Tindouf" @if($universite->wilaya == "Tindouf") selected @endif>37. Tindouf</option>
            <option value="Tissemsilt" @if($universite->wilaya == "Tissemsilt") selected @endif>38. Tissemsilt</option>
            <option value="El Oued" @if($universite->wilaya == "El Oued") selected @endif>39. El Oued</option>
            <option value="Khenchela" @if($universite->wilaya == "Khenchela") selected @endif>40. Khenchela</option>
            <option value="Souk Ahras" @if($universite->wilaya == "Souk Ahras") selected @endif>41. Souk Ahras</option>
            <option value="Tipaza" @if($universite->wilaya == "Tipaza") selected @endif>42. Tipaza</option>
            <option value="Mila" @if($universite->wilaya == "Mila") selected @endif>43. Mila</option>
            <option value="Aïn Defla" @if($universite->wilaya == "Aïn Defla") selected @endif>44. Aïn Defla</option>
            <option value="Naâma" @if($universite->wilaya == "Naâma") selected @endif>45. Naâma</option>
            <option value="Aïn Témouchent" @if($universite->wilaya == "Aïn Témouchent") selected @endif>46. Aïn Témouchent</option>
            <option value="Ghardaia" @if($universite->wilaya == "Ghardaia") selected @endif>47. Ghardaia</option>
            <option value="Relizane" @if($universite->wilaya == "Relizane") selected @endif>48. Relizane</option>
            <option value="Timimoun" @if($universite->wilaya == "Timimoun") selected @endif>49. Timimoun</option>
            <option value="Bordj Badji Mokhtar" @if($universite->wilaya == "Bordj Badji Mokhtar") selected @endif>50. Bordj Badji Mokhtar</option>
            <option value="Ouled Djellal" @if($universite->wilaya == "Ouled Djellal") selected @endif>51. Ouled Djellal</option>
            <option value="Béni Abbès" @if($universite->wilaya == "Béni Abbès") selected @endif>52. Béni Abbès </option>
            <option value="In Salah" @if($universite->wilaya == "In Salah") selected @endif>53. In Salah</option>
            <option value="In Guezzam" @if($universite->wilaya == "In Guezzam") selected @endif>54. In Guezzam</option>
            <option value="Touggourt" @if($universite->wilaya == "Touggourt") selected @endif>55. Touggourt</option>
            <option value="Djanet" @if($universite->wilaya == "Djanet") selected @endif>56. Djanet</option>
            <option value="El M'Ghair" @if($universite->wilaya == "El M'Ghair") selected @endif>57. El M'Ghair</option>
            <option value="El Meniaa" @if($universite->wilaya == "El Meniaa") selected @endif>58. El Meniaa</option>
          </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>    
</form>
</div>
</div>
