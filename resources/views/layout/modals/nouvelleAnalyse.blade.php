

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
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Code patient</label>
                                                    <input type="number" class="form-control">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Time</label>
                                                    <input type="time" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                            <label>Type</label>
                                                            <select class="form-control">
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
                                                    <textarea style="height:250px" class="form-control"></textarea>
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
           <a href="labo_analyse_radio"><button type="submit"  class="btn btn-success"> <i class="fa fa-check"></i> Enregistrer</button></a>
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

<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script>

removeDiv = function () {
   $('.modal-backdrop').remove();
    //alert('kjfd');
}

  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC78J7i4sucV9i5H0xMSusf8jYBDbF1JgI",
    authDomain: "esiha-5e928.firebaseapp.com",
    databaseURL: "https://esiha-5e928.firebaseio.com",
    projectId: "esiha-5e928",
    storageBucket: "esiha-5e928.appspot.com",
    messagingSenderId: "1033888860300"
  };
  firebase.initializeApp(config);

  // Get a reference to the database service
  var database = firebase.database();

</script>
