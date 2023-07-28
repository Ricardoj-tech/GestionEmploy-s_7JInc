let ajouterRessourceForm = () => {
    let form = 
    `
    <!-- Modal pour ajouter une ressource -->
        <div class="modal fade" id="AjouterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter une ressource</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form id="formAdd" method="POST">
                        <div class="col-md-10">
                            <label for="matricule" class="form-label">Matricule</label>
                            <input type="text" pattern="[A-Za-z][0-9]{5}" placeholder="Entrez le matricule de la ressource(A12345)"class="form-control is-valid" id="matricule" name="matricule" required>
                            <small class="form-text text-muted">Le matricule doit commencer par une lettre suivie de 5 chiffres.</small>
                            </div>
                        <div class="col-md-12">
                            <label for="Prénom" class="form-label">Prénom</label>
                            <input type="text" placeholder="Entrez le prénom de la ressource" class="form-control is-valid" id="prenom" name="prenom" required>
                        </div>
                        <div class="col-md-12">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" placeholder="Entrez le nom de la ressource" class="form-control is-valid" id="nom" name="nom" required>
                        </div>
                        <div class="col-md-12">
                        <label for="email" class="form-label">Courriel</label>
                        <input type="email" placeholder="Entrez le courriel de la ressource(toto@exemple.com)" class="form-control is-valid" id="email" name="email" required>
                    </div>
                        </br>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" type="button" onClick="addRessource();">Ajouter une ressource </button>
                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin du modal pour enregistrer film -->
    `;
    document.getElementById('contenu').innerHTML = form;
    $('#AjouterModal').modal('show');
}
let montrerFormEnreg = () => {
    let form = `
    <!-- Modal pour enregistrer patient -->
        <div class="modal fade" id="enregModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un quart</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form id="formEnreg">
                        <div class="col-md-6">
                            <label for="code" class="form-label">Matricule</label>
                                <select class="form-select" id="code" name="code" aria-describedby="validationServer04Feedback">
                                    <option selected disabled value="">Choisir</option>
                                    <option value="1234">1234</option>
                                    <option value="2346">2346</option>
                                    <option value="3980">3980</option>
                                    <option value="3980">3980</option>
                                    <option value="4177">4177</option>
                                    <option value="7306">7306</option>
                                    <option value="8895">8895</option>
                                </select>
                        </div>
                        <div class="col-md-12">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control is-valid" id="prenom" name="prenom" required>
                        </div>
                        <div class="col-md-12">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control is-valid" id="nom" name="nom" required>
                        </div>
                        <div class="col-md-12">
                            <label for="daten" class="form-label">Date du jour</label>
                            <input type="text" class="form-control is-valid" id="daten" name="daten" required>
                        </div>
                        <div class="col-md-12">
                        <label for="heureEntree" class="form-label">Heure d'entrée</label>
                        <select class="form-select" id="heureEntree" name="heureEntree" aria-describedby="validationServer04Feedback">
                            <option selected disabled value="">Choisir</option>
                            <option value=07H">07H</option>
                            <option value=7H30">7H30</option>
                            <option value="8H">8H</option>
                            <option value="15H">15H</option>
                            <option value="15H30">15H30</option>
                            <option value="23H">23H</option>
                            <option value="23H30">23H30</option>
                            <option value="Minuit">Minuit</option>
                        </select>
                        </div>
                        <div class="col-md-12">
                        <label for="heureSortie" class="form-label">Heure Sortie</label>
                        <select class="form-select" id="heureSortie" name="heureSortie" aria-describedby="validationServer04Feedback">
                            <option selected disabled value="">Choisir</option>
                            <option value=15H">15H</option>
                            <option value=15H30">15H30</option>
                            <option value="16H">16H</option>
                            <option value="23H">23H</option>
                            <option value="23H30">23H30</option>
                            <option value="07H">07H</option>
                            <option value="07H30">07H30</option>
                            <option value="08H">08H</option>
                        </select>
                        </div>
                        <div class="col-md-12">
                            <label for="departement" class="form-label">Département</label>
                            <input type="text" class="form-control is-valid" id="departement" name="departement" required>
                        </div>
                        <div class="col-md-12">
                         <label for="etablissement" class="form-label">Établissement </label>
                            <input type="numeric" class="form-control is-valid" id="etablissement" name="etablissement" required>
                        </div>
                        </br>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" type="button" onClick="requeteEnregistrer();"> Ajouter un quart </button>
                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin du modal pour enregistrer film -->
    `;
    document.getElementById('contenu').innerHTML = form;
    $('#enregModal').modal('show');
}
let remplirCardEmploye = (unEmploye)=> {
    let isActive = unEmploye.actif ? 'checked' : '';
    let isDisabled = unEmploye.desactive ? 'checked' : '';
    let rep =   
    `
    <tr>
      <td>${unEmploye.idR}</td>
      <td>${unEmploye.matricule}</td>
      <td>${unEmploye.prenom}</td>
      <td>${unEmploye.nom}</td>
      <td>${unEmploye.email}</td>
      <td>  
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="active" ${isActive} onchange="checkboxChanged()">
      </div>
      </td>
      <td>  
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="disableb" ${isDisabled} onchange="checkboxChanged()">
      </div>
      </td>
    </tr>
    
    `;
        return rep;
}

let listerEmploye = (listeEmployes) => {
    let contenu = `
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">idR</th>
            <th scope="col">Matricule</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Courriel</th>
            <th scope="col">Actif</th>
            <th scope="col">Inactif</th>
        </tr>
    </thead>
    <tbody>`;
    for (let unEmploye of listeEmployes){
            contenu+=remplirCardEmploye(unEmploye);
    } 
    contenu += `</tbody></table>`;
    document.getElementById('contenu').innerHTML = contenu;
}
let remplirCardPatients = (unPatient)=> {
    let rep =   
    `
    <tr>
      <td>${unPatient.idE}</td>
      <td>${unPatient.matricule}</td>
      <td>${unPatient.prenom}</td>
      <td>${unPatient.nom}</td>
      <td>${unPatient.dateJ}</td>
      <td>${unPatient.heureEntree}</td>
      <td>${unPatient.heureSortie}</td>
      <td>${unPatient.departement}</td>
      <td>${unPatient.etablissement}</td>
    </tr>
    `;
        return rep;
}

let listerPatients = (listePatients) => {
    let contenu = `
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">IdE</th>
            <th scope="col">Matricule</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Date du jour</th>
            <th scope="col">Heure Entrée</th>
            <th scope="col">Heure Sortie</th>
            <th scope="col">Département</th>
            <th scope="col">Établissement</th>
        </tr>
    </thead>
    <tbody>`;
    for (let unPatient of listePatients){
            contenu+=remplirCardPatients(unPatient);
    } 
    contenu += `</tbody></table>`;
    document.getElementById('contenu').innerHTML = contenu;
}
let remplirCardHospitalisations = (hospitalisations)=> {
    let rep = 
   `
   <tr>
     <td>${hospitalisations.code}</td>
     <td>${hospitalisations.idp}</td>
     <td>${hospitalisations.admission}</td>
     <td>${hospitalisations.sortie}</td>
     <td>${hospitalisations.specialite}</td>
     <td>${hospitalisations.chambre}</td>
   </tr>
   `;
       return rep;
}
let listerHospitalisations = (listeHospitalisations) => {
    let contenu = `
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Idp</th>
            <th scope="col">Admission</th>
            <th scope="col">Sortie</th>
            <th scope="col">Specialite</th>
            <th scope="col">Chambre</th>
        </tr>
    </thead>
    <tbody>`;
    for (let hospitalisations of listeHospitalisations){
            contenu+=remplirCardHospitalisations(hospitalisations);
    } 
    contenu += `</tbody></table>`;
    document.getElementById('contenu').innerHTML = contenu;
}
let remplirCardEtablissements = (unEtablissements)=> {
    let rep = 
   `
   <tr>
     <td>${unEtablissements.idp}</td>
     <td>${unEtablissements.nom}</td>
     <td>${unEtablissements.prenom}</td>
     <td>${unEtablissements.sexe}</td>
     <td>${unEtablissements.admission}</td>
     <td>${unEtablissements.sortie}</td>
   </tr>
   `;
       return rep;
}
let listerEtablissements = (listeEtablissements) => {
    let contenu = `
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Idp</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Sexe</th>
            <th scope="col">Admission</th>
            <th scope="col">Sortie</th>
        </tr>
    </thead>
    <tbody>`;
    for (let unEtablissements of listeEtablissements){
            contenu+=remplirCardEtablissements(unEtablissements);
    } 
    contenu += `</tbody></table>`;
    document.getElementById('contenu').innerHTML = contenu;
}
let remplirCardSpecialiteSexe = (unelisteSpecialite)=> {
    let rep = 
   `
   <tr>
     <td>${unelisteSpecialite.code}</td>
     <td>${unelisteSpecialite.idp}</td>
     <td>${unelisteSpecialite.admission}</td>
     <td>${unelisteSpecialite.sortie}</td>
     <td>${unelisteSpecialite.specialite}</td>
     <td>${unelisteSpecialite.chambre}</td>
   </tr>
   `;
       return rep;
}
let listerSpecailiteSexe = (listeSpecailiteSexe) => {
    let contenu = `
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Idp</th>
            <th scope="col">Admission</th>
            <th scope="col">Sortie</th>
            <th scope="col">Specialite</th>
            <th scope="col">Chambre</th>
        </tr>
    </thead>
    <tbody>`;
    for (let unelisteSpecialite of listeSpecailiteSexe){
            contenu+=remplirCardHospitalisations(unelisteSpecialite);
    } 
    contenu += `</tbody></table>`;
    document.getElementById('contenu').innerHTML = contenu;
}
let afficherMessage = (message) => {
    // Implement your logic to display the message here
    console.log(message);
  };
  

let montrerVue = (action, donnees) => {

    switch(action){
        case "ajouter":
        case "enregistrer"  :
        case "modifier"     :
        case "enlever"      :
            if(donnees.OK){
                afficherMessage(donnees.msg);
            }else{
                afficherMessage("Problème côté serveur. Essaiez plus tard!!!"); 
            }
        break;
        case "lister"       :
            if(donnees.OK){
                listerPatients(donnees.listePatients);
            }else{
                afficherMessage("Problème côté serveur. Essaiez plus tard!!!"); 
            }
        break;
        case "listerE"       :
            if(donnees.OK){
                listerEmploye(donnees.listeEmployes);
            }else{
                afficherMessage("Problème côté serveur. Essaiez plus tard!!!"); 
            }
        break;
        case "listerH"       :
            if(donnees.OK){
                listerHospitalisations(donnees.listeHospitalisations);
            }else{
                afficherMessage("Problème côté serveur. Essaiez plus tard!!!"); 
            }
        break;
        case "listerSpecialiteSexe"       :
             if(donnees.OK){
                 listerSexe(donnees.listeSpecialiteSexe);
             }else{
                 afficherMessage("Problème côté serveur. Essaiez plus tard!!!"); 
              }
    }
}