<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <div class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ route ('ecole.index') }}" class="nav-link active text-white">Gestion des écoles</a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('affectation.index') }}" class="nav-link text-white">Gestion des structures d'affectations </a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('encadrant.index') }}" class="nav-link text-white">Gestion des encadrants</a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('universite.index') }}" class="nav-link text-white">Gestion des universités</a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('compte.index') }}" class="nav-link text-white">Gestion des comptes</a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('stage.index') }}" class="nav-link text-white">Gestion des stages</a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('statistique.index') }}" class="nav-link text-white">Consulter les Statistiques</a>
            </li>
            <li id="li" class="nav-item dropdown">
                <a class="btn btn-warning btn-lg nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->utilisateur }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route ('statistique2.index') }}">Connecter en tant que (ADMIN)</a></li>
                    <li><a class="dropdown-item" href="{{ route ('login.show') }}">Se déconnecter</a></li>
                </ul>
            </li>
        </div>
    </nav>

    <!-- Bootstrap 5 JavaScript dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
<style>
    #li{
        margin-left: 450px;
    }
</style>









