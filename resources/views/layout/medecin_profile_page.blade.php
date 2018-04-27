  @extends('medecinHome')
  @section('content')

<!-- Page wrapper  -->
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Paramètres</h3> </div>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                  
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                        <h1>Informations Personnelles</h1>
                                        <hr>
                                            <div class="form-group">
                                                <label class="col-md-12">Nom</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Prénom</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Civilité</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                                                    <option>Madame (Mme)</option>
                                                                                    <option>Mademoiselle (Melle)</option>
                                                                                    <option>Monsieur (M)</option>
                                                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email"  class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Mot de passe</label>
                                                <div class="col-md-12">
                                                    <input type="password"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Numéro téléphone</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <h1>Informations Professionnelles</h1>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-sm-12">Spécialité</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                                                    <option>Acupuncteur</option>
                                                                                    <option>Algologue</option>
                                                                                    <option>Allergomogue</option>
                                                                                    <option>Anatomopthologiste</option>
                                                                                    <option>...</option>
                                                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Wilaya</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                                                    <option>Adrar</option>
                                                                                    <option>Chlef</option>
                                                                                    <option>Laghouat</option>
                                                                                    <option>...</option>
                                                                                    >
                                                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Commune</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                                                    
                                                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Adrese</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Position sur la map</label>
                                                <div class="col-md-12">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="200" frameborder="0" style="border:0"></iframe>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Numéro téléphone cabinet</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Jours de travail</label>
                                                <div class="col-sm-12">
                                                    <input type="checkbox">Dimanche <br>
                                                    <input type="checkbox">Lundi <br>
                                                    <input type="checkbox">Mardi <br>
                                                    <input type="checkbox">Mercredi <br>
                                                    <input type="checkbox">Jeudi <br>
                                                    <input type="checkbox">Vendredi <br>
                                                    <input type="checkbox">Samedi<br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Heures de disponibilité</label>
                                                <div class="col-sm-12">
                                                    <input type="checkbox">08:00-12:00 <br>
                                                    <input type="checkbox">13:00-16:00 <br>
                                                    <input type="checkbox">16:00-20:00 <br>
                                                    <input type="checkbox">Après 20:00 <br>
                                                   
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="checkbox"> J'accepte de recevoir des notification en dehors des heures de travail <br>
                                                    <br>
                                                    <input type="checkbox"> J'accepte de se dèplacer à un patient en cas d'urgence <br>
                                                   
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Enregistrer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
         
        </div>
        <!-- End Page wrapper  -->

    @endsection