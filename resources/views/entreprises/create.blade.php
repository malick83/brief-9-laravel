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

<div class="container">
  <div class="row">
    <div class="col-md">
    <main style="border-radius: 15px 15px 15px 15px;margin:auto;box-shadow: 10px 8px 34px 6px rgba(185, 181, 181, 0.685);padding-left:30px;padding-right:30px;padding-top:30px;padding-bottom:30px;">
    <form id="id_form" method="POST" action="{{ route('entreprises.store') }}">
      @csrf
                <div class="mb-4">
                    <label for="nom" class="form-label">Nom</label>
                    <input id="nom" class="form-control" name="nom" type="text" placeholder="KEBE" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="siege" class="form-label">siege</label>
                    <input id="siege" class="form-control" name="siege" type="text" placeholder="KEBE" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="telephone" class="form-label">Téléphone du répondant</label>
                  <input id="telephone" class="form-control" name="telephone" type="tel" placeholder="777777777" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="creationEnt" class="form-label">Date création</label>
                  <input id="creationEnt" class="form-control" name="dateCreation" type="date" placeholder="18-12-2020" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="registreEnt" class="form-label">Registre de commerce</label>
                    <input id="registreEnt" class="form-control" name="registre" type="text" placeholder="37384638343" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="ninea" class="form-label">ninea</label>
                    <input id="ninea" class="form-control" name="ninea" type="text" placeholder="37384638343" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-4">
                    <label for="pageWebEnt" class="form-label">Page Web de l'entreprise</label>
                    <input id="pageWebEnt" class="form-control" name="pageWebEnt" type="text" placeholder="https://patisen.sn" aria-describedby="emailHelp">
                </div>

                <div class="mb-4">
                    <label for="dispositifFEnt">dispositif de formation ?</label> : <input id="dispositifFEnt" name="dispositifFEnt" type="radio" value="1"> Oui <input id="dispositifFEnt" name="dispositifFEnt" type="radio" value="2"> Non
                </div>        

                <div class="mb-4">
                    <label for="organiEnt">organigramme ?</label> : <input id="organiEnt" name="organiEnt" type="radio" value="1"> Oui <input id="organiEnt" name="organiEnt" type="radio" value="2"> Non       
                </div>
                <div class="mb-4">
                    <label for="contratEnt">Contrat Formel ?</label> : <input id="contratEnt" name="contratEnt" type="radio" value="1"> Oui <input id="contratEnt" name="contratEnt" type="radio" value="2"> Non
                </div>
                <select class="form-select" name="quartier_id" aria-label="list des régions">
                  <option selected>Sélectionner la localité</option>
                    @foreach ($quartiers as $quartier)
                      <option value="{{ $quartier->id }}">{{ $quartier->nom }}</option>
                    @endforeach
                </select>
                <div class="mb-4" style="width:150px;margin:auto;margin-bottom:80px;margin-top:20px">
                    <button type="submit" class="btn btn-primary" name="rep-registre">Enregistrer</button>
                </div>
            </form>
      </main>
    </div>
  </div>
</div>
</body>
</html>