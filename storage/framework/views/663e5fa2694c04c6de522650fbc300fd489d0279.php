

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

<script>

removeDiv = function () {
   $('.modal-backdrop').remove();
    //alert('kjfd');
}

</script>
