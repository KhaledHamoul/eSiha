

<!-- MODAL -->

<div class="container">
  <!-- Trigger the modal with a button -->
  <button  type="button" class="btn btn-dark btn-outline m-b-10 m-l-5 pull-right" data-toggle="modal"  data-target="#myModal">+ Analyse / Radio</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        
        
                        <div class="card card-outline-primary">
                           
                            <div class="card-body">
                            
                                <form action="#">
                                    <div class="form-body">
                                    <h3 class="box-title m-t-40">Nouvelle analyse / Nouveau radio</h3>
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Nom patient</label>
                                                    <input id="nom" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Code patient</label>
                                                    <input id="code" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input id="date" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Time</label>
                                                    <input id="time" type="time" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                            <label>Type</label>
                                                            <select id="type" class="form-control">
                                                                    <option>Analyse</option>
                                                                    <option>Radio</option>
                                                                </select>
                                                </div>
                                       </div>
                                       <div class="row">
                                          
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <br>
                                                    <label>Description</label>
                                                    <textarea id="desc" style="height:150px" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Resultat d'analyse / radio</label>
                                                    <input id="file" type="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    
        <div class="modal-footer">
           <a ><button type="submit" onclick="saveAnalyseRadio()"  class="btn btn-success"> <i class="fa fa-check"></i> Enregistrer</button></a>
           <button type="button" class="btn btn-inverse btn-default" onclick="removeDiv()" data-dismiss="modal">Annuler</button>
          
        </div>
      </div>

    </div>
  </div>

</div>

     </div>
          </div>
                            </div>
        </div>
         </div>
          </div>
          </div>
        <!-- End Page wrapper  -->


