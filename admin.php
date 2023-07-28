<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <link href="client/utilitaires/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="client/utilitaires/bg.css" rel="stylesheet"> -->
    <script src="client/utilitaires/jquery-3.6.0.min.js"></script>
    <script src="client/utilitaires/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="client/employes/vueEmploye.js"></script> 
    <script src="client/employes/requetesEmp.js"></script>

   
</head>
<!-- <body onLoad="chargerFilmsFETCH();"> -->
  
  <body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container-fluid">
          <img src="client/images/7J.jpg" class="image-border" alt="photo" style="width: 80px" />
          <a class="navbar-brand" href="#">Gestion des employés</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="input-group">
              <div class="form-outline">
              <input id="search-input" type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1"> Rechercher par prénom </label>
              </div>
              <button id="search-button" type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
              </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="javascript: ajouterRessourceForm();">Ajouter une ressource</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript: chargerRessources();">Lister les employé(e)s (R)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript: montrerFormEnreg();">Ajouter un quart (C)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript: chargerPatientsAJAX();">Lister les quarts (R)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript: chargerPatientsAJAX();">Modifier un quart (E)</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" id="navbarDarkDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Lister quart par prénom (R)
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Marie-Louis Domond ');">Marie-Louis Domond </a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Luna Pierre Déméza');">Luna Pierre Déméza</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Alicia Beau-frère');">Alicia Beau-frère</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Deltha Charles ');">Deltha Charles </a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Françoise Saint Fort');">Françoise Saint Fort</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Magdala Jean');">Magdala Jean</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Olda Charles');">Olda Charles</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Marie Irlande Pierre');">Marie Irlande Pierre</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Sylvanie André');">Sylvanie André</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Marie-Émilienne Bodotte');">Marie-Émilienne Bodotte</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Jeannette Senou');"> Jeannette Senou</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Eline Bastien');">Eline Bastien</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Clermont Charles');">Clermont Charles</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Hawa Dioubate');">Hawa Dioubate</a></li>
              </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Lister quart par Date (R)
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Aujourd'hui');">Aujourd'hui</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Hier');">Hier</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Demain');">Demain</a></li>
                  <li><a class="dropdown-item" href="javascript:chargerEtablissementsAJAX('Jour de la semaine');">Jour de la semaine</a></li>
                  <select id="jours-semaine">
                    <option value="">Sélectionner un jour</option>
                    <option value="dimanche">Dimanche</option>
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="jeudi">Jeudi</option>
                    <option value="vendredi">Vendredi</option>
                    <option value="samedi">Samedi</option>
                  </select>
                  <li>
                    <a class="dropdown-item" href="javascript: chargerEtablissementsAJAX('Mois de l\'année');">Mois de l'année</a>
                    <select id="mois-annee" onchange="selectionnerMois(this.value);">
                      <option value="">Sélectionner un mois</option>
                      <option value="janvier">Janvier</option>
                      <option value="février">Février</option>
                      <option value="mars">Mars</option>
                      <option value="avril">Avril</option>
                      <option value="mai">Mai</option>
                      <option value="juin">Juin</option>
                      <option value="juillet">Juillet</option>
                      <option value="août">Août</option>
                      <option value="septembre">Septembre</option>
                      <option value="octobre">Octobre</option>
                      <option value="novembre">Novembre</option>
                      <option value="décembre">Décembre</option>
                    </select>
                  </li>

                  <li>
                    <a class="dropdown-item" href="javascript: chargerEtablissementsAJAX('Plage horaire');">Plage horaire</a>
                    <select id="plage-horaire" onchange="selectionnerPlageHoraire(this.value);">
                      <option value="">Sélectionner une plage horaire</option>
                      <option value="Jour">Jour</option>
                      <option value="Soir">Soir</option>
                      <option value="Nuit">Nuit</option>
                    </select>
                  </li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link " href="deconnexion.php" >Se déconnecter </a>
                </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin de barre de navigation -->
      <div class="container" id="contenu" ></div>
      <div class="msg" id="msg"></div>
</body>
</html>