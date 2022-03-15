<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<main>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 30px;">
  <div class="container-fluid mx-auto" style="width: 1000px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <a class="nav-link h5" href="#">Nous les femmes</a>
        <li class="nav-item h4">
        <a class="nav-link" href="#">Formulaire</a>
        </li>
        <li class="nav-item h4">
        <a class="nav-link" href="#">Se deconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top: 80px">
     <div class="row">
        <div class="col col-xs-2">
            <table class="table mb-12 table-striped table-bordered" style="text-align:center;margin-top:0px;">
                <thead>
                    <tr>
                    <th><a href="#">Num</a></th>
                        <th><a href="#">Nom</a></th>
                        <th><a href="#">Siége</a></th>
                        <th><a href="#">Ninea</a></th>
                        <th><a href="#">Quartier</a></th>
                        <th>Détails</th>
                    </tr>
                </thead>

                <tbody>                        
                    @foreach ($entreprises as $entreprise)
                        <tr>
                        <th scope="row">{{ $entreprise->id }}</th>
                        <td>{{ $entreprise->nom }}</td>
                        <td>{{ $entreprise->siege }}</td>
                        <td>{{ $entreprise->ninea }}</td>
                        <td>{{ $entreprise->quartier->nom }}</td>                                                  
                        <td>
                            <a class="btn btn-info" href="{{ route('entreprises.show', $entreprise) }}">Détails</a>
                            <a class="btn btn-success" href="#">Modifier</a>
                            <a class="btn btn-danger" href="#">Supprimer</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
    </div>
</main>
</body>
</html>