
let chargerPatientsAJAX = () => {  
    $.ajax({
        type : "POST",
        url  : "routes.php",
        data : {"action":"lister"},
        dataType : "json", //text pour voir si bien formé même chose pour xml
        success : (listePatients) => {//alert(listeFilms);
            // listeFilms = reponse;
        	montrerVue("lister", listePatients);
        },
        error : (err) => {
            //Décider du message
        }
    })

}
let chargerRessources = () => {   
    $.ajax({
        type : "POST",
        url  : "routes.php",
        data : {"action":"listerE"},
        dataType : "json", //text pour voir si bien formé même chose pour xml
        success : (listeEmployes) => {//alert(listeFilms);
            // listeFilms = reponse;
        	montrerVue("listerE", listeEmployes);
        },
        error : (err) => {
            //Décider du message
        }
    })

}


let chargerHospitalisationsAJAX = () => {
    $.ajax({
        type : "POST",
        url  : "routes.php",
        data : {"action":"listerH"},
        dataType : "json", //text pour voir si bien formé même chose pour xml
        success : (listeHospitalisations) => {//alert(listeFilms);
            // listeFilms = reponse;
        	montrerVue("listerH", listeHospitalisations);
        },
        error : (err) => {
            //Décider du message
        }
    })
}

let chargerEtablissementsAJAX = () => {
    $.ajax({
        type : "POST",
        url  : "routes.php",
        data : {"action":"listerE"},
        dataType : "json", //text pour voir si bien formé même chose pour xml
        success : (listeEtablissements) => {//alert(listeFilms);
            // listeFilms = reponse;
        	montrerVue("listerE", listeEtablissements);
        },
        error : (err) => {
            //Décider du message
        }
    })
}
let chargerSpecialiteSexeAJAX = () => {
    $.ajax({
        type : "POST",
        url  : "routes.php",
        data : {"action":"listerSexe"},
        dataType : "json", //text pour voir si bien formé même chose pour xml
        success : (listeSpecailiteSexe) => {//alert(listeFilms);
            // listeFilms = reponse;
        	montrerVue("listerSexe", listeSpecailiteSexe);
        },
        error : (err) => {
            //Décider du message
        }
    })
}

let requeteEnregistrer = () => {
	let formPatient = new FormData(document.getElementById('formEnreg'));
	formPatient.append("'action'",'enregistrer');
	$.ajax({
		type : 'POST',
		url : 'routes.php',
		data : formPatient, //$('#formEnreg').serialize()
		//async : false,
		//cache : false,
		contentType : false,
		processData : false,
        dataType : 'json', //text pour le voir en format de string
		success : function (reponse){//alert(reponse);
					montrerVue("enregistrer", reponse);
		},
        error : (err) => {
		   
		}
	});
}


let addRessource = () => {
    let formRessource = new FormData(document.getElementById('formAdd'));
    formRessource.append("action", "ajouter");
    $.ajax({
        type: "POST",
        url : "routes.php",
        data : formRessource,
        contentType : false,
        processData : false,
        dataType:  "json",
        success :function (reponse){
            montrerVue("ajouter", reponse);
            let successMessage = document.createElement('div');
            successMessage.textContent = "La ressource a été ajoutée avec succès!";
            successMessage.classList.add('success-message'); 
            formAdd.appendChild(successMessage);
        },
        error : (err)  => {
            }
        });
    }
