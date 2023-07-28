


<link href="client/utilitaires/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="client/utilitaires/bg.css" rel="stylesheet"> 
<script src="client/utilitaires/jquery-3.6.0.min.js"></script>
<script src="client/utilitaires/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

<section class="h-100 gradient-form" style="background-color: #acd3ba;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="client/images/7J.jpg" class="image-border"
                      style="width: 250px;" alt="logo">
                  </div>
  
                  <form action="server/actions/connexion.php" method="POST">
                    <p> </p>
                    <h4 class="mt-1 mb-5 pb-1"> Discipline , Respect , Intelligence </h4>
                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control"
                        placeholder="Entrer votre courriel" required/>
                      <label class="form-label" for="form2Example11">Votre courriel</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control" 
                      placeholder="Tapez votre mot de passe" required />
                      <label class="form-label" for="form2Example22">Votre mot de passe </label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" >Se connecter</button>
                      <a class="text-muted" href="#!">Mot de passe oublié?</a>
                    </div>
  
                  </form>

                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <img src="client/images/Cardo.jpg" class="image-border" style="width: 500px;" alt="image">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>