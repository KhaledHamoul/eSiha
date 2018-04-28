
<!-- MODAL -->

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">


                        <div class="card card-outline-primary">

                            <div class="card-body">

                                <form action="#">
                                    <div class="form-body">
                                    <h3 class="box-title m-t-40">Rendez-vous</h3>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <h4>Nom patient</h4>
                                                    <span id="nom" >HAMOUL Khaled</span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <h4>Code patient</h4>
                                                    <span id="code">154</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <h4>Type de demande</h4>
                                                    <span id="type">Analyse</span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <h4>Détails</h4>
                                                    <span id="desc">FNS</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4>Date</h4>
                                                    <input id="date" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4>Time</h4>
                                                    <input  id="time" type="time" class="form-control">
                                                </div>
                                            </div>

                                        </div>




                                </form>
                            </div>
                        </div>

        <div class="modal-footer">
           <a ><button type="submit" onclick="saveAnalyseRadio()"  class="btn btn-success"> <i class="fa fa-check"></i> Confirmer</button></a>
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
  var ref = database.ref('RDV_Labo');

removeDiv = function () {
   $('.modal-backdrop').remove();
    //alert('kjfd');
}





  var lu = document.getElementById('lu');
  var nonlu = document.getElementById('nonlu');
     // Initialize Firebase




  var trt = "";
  var trf = "";
  ref.on('value', function(snapshot) {

	  var child;

        snapshot.forEach(function(childSnapshot) {

         child = childSnapshot.val();

         if (child.confirmed == false ){
			 	 trt += '<div class="media"><div class="media-left"><a href="#"><img alt="..." src="images/user.png" style="width:15%" class="media-object"></a></div><div class="media-body"><h4 class="media-heading">'+child.nomPatient+'</h4><p>'+child.details+'</p><p class="comment-date">'+child.date + "  " + child.time+'</p><button onClick="consulter('+child.codePatient+",'"+ child.nomPatient+"','"+child.type+ "','"+child.details+ "','"+child.date+"','"+child.time+"',"+child.confirmed+')" data-toggle="modal"  data-target="#myModal" type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>	</div>	</div>';

		 }
          else  {
			  trf += '<div class="media"><div class="media-left"><a href="#"><img alt="..." src="images/user.png" style="width:15%" class="media-object"></a></div><div class="media-body"><h4 class="media-heading">'+child.nomPatient+'</h4><p>'+child.details+'</p><p class="comment-date">'+child.date + "  " + child.time+'</p><button onClick="consulter('+child.codePatient+",'"+ child.nomPatient+"','"+child.type+ "','"+child.details+ "','"+child.date+"','"+child.time+"',"+child.confirmed+')" data-toggle="modal"  data-target="#myModal" type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>	</div>	</div>';

		  }
        });

		lu.innerHTML = trt;
        nonlu.innerHTML = trf;


      });


       var nom = document.getElementById('nom');
       var code = document.getElementById('code');
       var date = document.getElementById('date');
       var time = document.getElementById('time');
       var type = document.getElementById('type');
       var desc = document.getElementById('desc');

	   function  consulter(c,n,t,d,dateE,timeE,confirmed){

                code.innerHTML = c ;
                nom.innerHTML = n;

                if (confirmed == false) {
                  var day =dateE.substring(0, 2);
                  var mounth =dateE.substring(3, 5);
                  var dd =dateE.substring(6, 10)+"-"+mounth+"-"+day ;
                   date.value = dd;
                   time.value = timeE ;
                  date.disabled = true;
                  time.disabled = true;
                }else{
                  var day =dateE.substring(0, 2);
                  var mounth =dateE.substring(3, 5);
                  var dd =dateE.substring(6, 10)+"-"+mounth+"-"+day ;
                   date.value = dd;
                   time.value = timeE ;
                  date.disabled = false;
                  time.disabled = false;
                }


                type.innerHTML = t;
                desc.innerHTML = d;


      }






  </script>
