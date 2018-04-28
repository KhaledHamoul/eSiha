

<!-- MODAL -->

<div class="container">
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="urgenceDetails" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="card card-outline-primary">

            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">Demande de consultation en <span style="color:red">Urgence</span></h3>

                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Patient : <span id="ur-nomAgePatient"><b>HAMOUL Khaled</b>(23 ans)</span></label>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6 ">
                              <div class="form-group">
                                  <label> * Date : <span id="ur-dateHeur"><b>13-02-2018</b> 22:23</span> </label>
                              </div>
                          </div>
                            <!--/span-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> * Cas du maladie : <b id="ur-maladie">Douleur en dos </b> </label>
                                </div>
                            </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> * Degrer de gravite : <b><span id="ur-degreGrav" style="font-size:25px;color:red">8</span>/10 </b> </label>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233.32167946605477!2d3.1739735687698065!3d36.70363379485288!2m3!1f0!2f39.46132806453005!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1sfr!2sdz!4v1524865798314" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!--/row-->

                    </div>
                    <div class="form-actions pull-right">
                        <button type="submit" onclick="answerUrgence()" data-dismiss="modal" class="btn btn-success"> <i class="fa fa-check"></i>Accepter</button>
                        <button type="button" class="btn btn-inverse" onclick="removeDiv()" data-dismiss="modal" >Annuler</button>
                    </div>
                </form>
            </div>
        </div>
      </div>

    </div>
  </div>

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script>

removeDiv = function () {
   $('.modal-backdrop').remove();
}



       var nomAge = $("#ur-nomAgePatient");
       var dateHeur = $('#ur-dateHeur');
       var maladie = $('#ur-maladie');
       var degreGrave = $('#ur-degreGrav');
       var key ;


       UrgenceView = function(ekey,user,date,heur,cas,degrer){
         nomAge.html('<b>'+user+'</b>(23 ans)');
         dateHeur.html('<b>'+date+'</b> '+heur);
         maladie.html(cas);
         degreGrave.html(degrer);
         key = ekey;
       }


     answerUrgence = function(){
            //  var database = firebase.database();
              database.ref('Urgences/' + key).update({accepte: "-Eu5_6kEkt90u56kEu56k"});
              removeDiv();

     }







</script>
