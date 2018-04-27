
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
         <span>Date de naissance : 12-07-1996</span> <span>Age : 22 ans</span> <span>Groupe sangun : A+</span>


          <div class="row">
            <div class="col-md-12">
               <div class="col-md-6">
                 <div class="form-group">
                   <select class="form-control" name="score" required>
                     <option disabled selected>Score (Qualification)</option>

                   </select>
                 </div>
                 <div class="form-group">
                   <select class="form-control" name="idGrp" required>
                     <option value="0" disabled selected>Groupe</option>

                   </select>
                 </div>
                 <div class="form-group">
                   <select class="form-control" name="idChampAct" required>
                     <option value="0" disabled selected>Champ d'Activite</option>

                   </select>
                 </div>
                 <div class="form-group">
                   <select class="form-control select2 select2-hidden-accessible" name="produits[]" required multiple="" data-placeholder="Produits/Services" style="width: 100%;" tabindex="-1" aria-hidden="true">

                   </select>
                 </div>
               </div>
               <div class="col-md-6">
                   <label for="">Remarque & Description</label>
                   <textarea class="form-control" placeholder=". . ." name="description" style="height: 154px;" required></textarea>
               </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
        <input class="btn btn-success" type="submit" value="Ajouter"></form>
      </div>
    </div>
  </div>
</div>
