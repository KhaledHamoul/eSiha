
<<<<<<< HEAD

<!-- MODAL -->

<div class="container">
  <!-- Trigger the modal with a button -->
  <button  type="button" class="btn btn-dark btn-outline m-b-10 m-l-5 pull-right" data-toggle="modal"  data-target="#myModal">+ Analyse / Radio</button>

  <!-- Modal -->
  <div class="modal fade" id="nouvelleCons" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="card card-outline-primary">

            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">Nouvelle consultation</h3>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Patient : <b>HAMOUL Khaled</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Objet</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                                <div class="form-group">
                                    <label>Notes</label>
                                    <textarea class="form-control" name="name" rows="8" cols="80"></textarea>
                                </div>
                    </div>
                    <div class="form-actions pull-right">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Enregistrer</button>
                        <button type="button" class="btn btn-inverse" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
      </div>

    </div>
  </div>

</div>


=======
>>>>>>> aab650594ea479d6b39510ed549e8a21046fd4de
<div class="modal fade" id="nouvelleCons">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h3 class="modal-title" style="color:white" >Creation d'une nouvelle consultation : BENSAIB Kamel</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="createProspect">
          <?php echo csrf_field(); ?>

         <h4>Informations de patient</h4>
         <span><b>Date de naissance :</b> 12-07-1996</span> <span>Age : <b>22 ans</b></span> <span>Groupe sangun : <b>A+</b></span>
         <span><b>Situation familiale  :</b> Cilibatere</span> <span>Numero deSecurite social : <b>01993434543535345</b></span> <span>Profession : <b>Etudiant</b></span>
         <h4>Informations de Consultation</h4>
         <div class="form-group">
           <input type="date" name="" value="">
         </div>
         <div class="form-group">
           <select class="form-control" name="idGrp" required>
             <option value="" disabled selected>Type</option>
             <option value="" >Soint</option>
             <option value="" >Detatrage</option>
           </select>
         </div>
         <div class="form-group">
           <input type="text" name="" value="" placeholder="Object">
         </div>
         <div class="col-md-6">
             <label for="">Remarque & Description</label>
             <textarea class="form-control" placeholder=". . ." name="description" style="height: 154px;" required></textarea>
         </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
        <input class="btn btn-success" type="submit" value="Ajouter"></form>
      </div>
    </div>
  </div>
</div>
