
<div class="modal fade" id="nouvelleCons">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h3 class="modal-title" style="color:white" >Creation d'une nouvelle consultation : BENSAIB Kamel</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="createProspect">
          @csrf

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
