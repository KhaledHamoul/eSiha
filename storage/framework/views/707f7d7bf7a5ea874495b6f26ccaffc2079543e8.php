

<!-- MODAL -->

<div class="container">
  <!-- Trigger the modal with a button -->
  <button  type="button" class="btn btn-dark btn-outline m-b-10 m-l-5 pull-right" data-toggle="modal"  data-target="#myModal">+ Analyse / Radio</button>

  <!-- Modal -->
  <div class="modal fade" id="nouvelleCons" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="removeDiv()" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>


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
         <span class="form-control"><b>Date de naissance :</b> 12-07-1996</span> <span class="form-control">Age : <b>22 ans</b></span> <span class="form-control">Groupe sangun : <b>A+</b></span>
         <span><b>Situation familiale  :</b> Cilibatere</span> <span>Numero deSecurite social : <b>01993434543535345</b></span> <span>Profession : <b>Etudiant</b></span>
         <h4>Informations de Consultation</h4>
         <div class="form-group">
           <input class="form-control" type="date" name="" value="">
         </div>
         <div class="form-group">
           <select class="form-control" name="idGrp" required>
             <option value="" disabled selected>Type</option>
             <option value="" >Soint</option>
             <option value="" >Detatrage</option>
           </select>
         </div>
         <div class="form-group">
           <input class="form-control" type="text" name="" value="" placeholder="Object">
         </div>
         <div class="form-group">
             <label for="">Remarque & Description</label>
             <textarea class="form-control" placeholder=". . ." name="description" style="height: 154px;" required></textarea>
         </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" onclick="hideFade()">Fermer</button>
        <input class="btn btn-success" type="submit" value="Ajouter"></form>
      </div>
    </div>
  </div>
</div>

<script>

removeDiv = function () {
   $('.modal-backdrop').remove();
    //alert('kjfd');
}

</script>
