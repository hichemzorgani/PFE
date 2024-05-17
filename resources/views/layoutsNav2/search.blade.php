@include('partials.nav2')
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
    <h2>La recherche</h2>
    <hr>
<div id="div">
    <div id="add_edit_div">
        <div class="row">
            <div class="col-md-6">
                <p class="h4">Rechercher</p>
                <form action="{{ route('search.show') }}" method="POST">
                    @csrf 
                    <div style="margin-top: 0px" class="row">
                        <div class="col-6">
                    <div style="margin-top: 0px" class="form-group">
                        <p class="h6">Théme</p>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" name="theme" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" > 
                            <!--<select class="form-control" name="theme">
                                <option value="">Choose Theme (Optional)</option>
                                
                            </select>-->
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group" style="margin-top: 0px">
                        <p class="h6">Type de stage</p>
                        <div class="input-group input-group-sm mb-3">
                            <!--<input type="text" name="type_stage" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" > -->
                            <select class="form-control" name="type_stage">
                                <option value="">Choose type de stage (Optional)</option>
                                    <option value="pfe">Projet fin d'étude</option>
                                    <option value="immersion">immersion</option>
                            </select>
                        </div>
                    </div>
                </div></div>
                    <div style="margin-top: 0px" class="row">
                        <div class="col-6">
                    <div style="margin-top: 0px" class="form-group">
                        <p class="h6">Niveau</p>
                        <div class="input-group input-group-sm mb-3">
                           <!-- <input type="text" name="level" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" > -->
                           <select class="form-control" name="level">
                            <option value="">Choose level (Optional)</option>
                                <option value="Licence">Licence</option>
                                <option value="Master">Master</option>
                                <option value="doctorat">Doctorat</option>
                                <option value="ingénieur">Ingénieur</option>
                                <option value="TS">Technicien supérieur</option>
                        </select>
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group" style="margin-top: 0px">
                        <p class="h6">Structure d'affectation</p>
                        <div class="input-group input-group-sm mb-3">
                            <!--<input type="text" name="structuresAffectation_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" >-->
                            <select class="form-control" name="structuresAffectation_id">
                                <option value="">Choose Structure d'affectation (Optional)</option>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach($affectations as $affectation)
                                    <option value="{{ $affectation->id }}">{{ $counter++ }}. {{ $affectation->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div></div>
                <div class="form-group">
                    <p class="h5">En cours ?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="en_cours" id="oui" value="oui">
                        <label class="form-check-label" for="oui">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="en_cours" id="non" value="non">
                        <label class="form-check-label" for="non">Non</label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input  type="submit" class="btn btn-success" value="Rechercher" name="Rechercher">
                </div>
                </div>
                <div class="col-md-6" style="margin-top: 37px">
                    <div  class="form-group row">
                        <div class="col-6">
                            <p class="h6">Encadrant</p>
                        <div class="input-group input-group-sm mb-3">
                            <!--<input type="text" name="encadrant_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" >-->
                            <select class="form-control" name="encadrant_id">
                                <option value="">Choose Encadrant (Optional)</option>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach($encadrants as $encadrant)
                                    <option value="{{ $encadrant->id }}">{{ $counter++ }}. {{ $encadrant->nom }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        </div>
                        <div class="col-6">
                            <p class="h6">Université</p>
                        <div class="input-group input-group-sm mb-3">
                            <!-- <input type="text" name="etablissement_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" > -->
                            <select class="form-control" name="etablissement_id">
                                <option value="">Choose Etablissement (Optional)</option>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach($universites as $universite)
                                    <option value="{{ $universite->id }}">{{ $counter++ }}. {{ $universite->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>                      
                    </div>
                    <div style="margin-top: 0px" class="row">
                        <div class="col-6">
                    <div style="margin-top: 0px" class="form-group">
                        <p class="h6">Spécialité</p>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" name="speciality" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" >
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group" style="margin-top: 0px">
                        <p class="h6">Année</p>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" name="year" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" autocomplete="off" >
                            
                        </div>
                    </div>
                </div></div>
                </form>        
            </div>
        </div>
    </div>
</div>
@if (empty($result))
            <p></p>
        @else
        <div class="container mt-2">
            <hr>
                <h2>Résultats de la recherche : <span style="color:green">{{$count}} Stages </span></h2>
            <hr>
            <table class="table table-bordered table-striped">
                <thead class="table" style="background-color: rgb(219, 169, 5)">
                
                <tr>
                    
                    <th>Theme</th>
                    <th>Type de stage</th>
                    <th>Date debut</th>
                    <th>Date fin</th>
                    <th>niveau</th>
                    <th>Structure d'affectation </th>
                    <th>Encadrant</th>
                    <th>Etablissement</th>
                    <th>Spécialité</th>
                    
                   
                    
                </tr>  
                </thead>
                
                @foreach ($result as $stage)
            <tr> 
                
                <td>{{$stage->theme}}</td>
                <td>{{$stage->type_stage}}</td>
                <td>{{$stage->start_date}}</td>
                <td>{{$stage->end_date}}</td>
                <td>{{$stage->level}}</td>
                <td>{{$stage->affectation->nom}}</td>
                <td>{{$stage->encadrant->nom}}</td>
                <td>{{$stage->etablissement->nom}}</td>
                <td>{{$stage->speciality}}</td>
                
                
                
            </tr> 
        @endforeach  
            </table>
            <br>
            <br>
        </div>
        @endif