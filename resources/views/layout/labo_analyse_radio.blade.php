@include('layout.header')



@include('layout.top')

@include('layout.aside_menu_labo')



  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Analyses / Radios</h3> </div>

            </div>
            <!-- End Bread crumb -->
  <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                   <div class="col-12">
            <div class="card ">
                            <div class="card-body">


                                <div class="table-responsive m-t-40">

                                    <table id="myTable" class="table table-bordered table-striped dataTable " role="grid" aria-describedby="myTable_info">
                                        <thead >
                                            <tr role="row">
                                                <th  style="width: 130.4px;">Patient</th>
                                                <th  style="width: 90.4px;">Code patient</th>
                                                <th  style="width: 90.4px;">Type</th>
                                                <th  style="width: 90.4px;">Date / Heure</th>
                                                <th  style="width: 190.4px;">Détails</th>
                                                <th  style="width: 50.4px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="listRapports">
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">OUMELLAL Abdessalam</td>
                                                <td>RADIO</td>
                                                <td>Alger</td>
                                                <td>2008/11/28</td>
                                                <td>Pieds</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                           <!--
                                            <tr role="row" class="even">
                                                <td class="sorting_1">KERFAH Issam</td>
                                                <td>RADIO</td>
                                                <td>Boumerdess</td>
                                                <td>2009/10/09</td>
                                                <td>Tete</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">GUERRAS Mohamed</td>
                                                <td>ANALYSES</td>
                                                <td>Blida</td>
                                                <td>2009/01/12</td>
                                                <td>IRM FNM</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">BATOUCHE Oussama</td>
                                                <td>ANAYSES</td>
                                                <td>Tiaret</td>
                                                <td>2012/10/13</td>
                                                <td>Sang</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">HAMOUL Khaled</td>
                                                <td>ANALYSES</td>
                                                <td>Oran</td>
                                                <td>2011/06/07</td>
                                                <td>IRM FNS</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">CHAREF Raouf</td>
                                                <td>RADIO</td>
                                                <td>Annaba</td>
                                                <td>2012/12/02</td>
                                                <td>Dos</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">BOUKHOULDA Salah</td>
                                                <td>ANALYSES</td>
                                                <td>Setif</td>
                                                <td>2011/05/03</td>
                                                <td>FNS</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">BENABDELLAH Farouk</td>
                                                <td>RADIO</td>
                                                <td>Tipaza</td>
                                                <td>2011/12/12</td>
                                                <td>Pied</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">MEBAREK Nassim</td>
                                                <td>ANALYSES</td>
                                                <td>Alger</td>
                                                <td>2011/12/06</td>
                                                <td>IRM</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">CHOHRA Mohamed</td>
                                                <td>RADIO</td>
                                                <td>Ouaregla</td>
                                                <td>2012/03/29</td>
                                                <td>Cous</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr>
                                            -->
                                        </tbody>
                                    </table>
                               <br><br>
                                    </div>


@include('layout.modals.nouvelleAnalyse')
@include('layout.footer')

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
  var list = document.getElementById('listRapports');
  
   
 

  var ref = database.ref('Rapports');

  ref.on('value', function(snapshot) {
      var tr = "";
        snapshot.forEach(function(childSnapshot) {
          
         var child = childSnapshot.val();
         tr += '<tr role="row">' + '<th  style="width: 130.4px;">'+child.nom+'</th><th  style="width: 90.4px;">'+child.code+'</th><th  style="width: 90.4px;">'+child.type+'</th><th  style="width: 90.4px;">'+child.date+"  "+child.time  +'</th><th  style="width: 190.4px;">'+child.description+'</th> <th><button id="'+child.code+child.date+'" onClick="rapportView('+"'"+child.fileUrl+"'"+')" type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></th></tr>';
          
        });
        list.innerHTML = tr; 
      });

      function rapportView(ele){
                        //var ref = database.ref('Rapports');
                        var ref = firebase.storage();
                        ref.ref('rapports/'+ ele).getDownloadURL().then(function(url) {
                        // `url` is the download URL for 'images/stars.jpg'
                    
                        // This can be downloaded directly:
                        var xhr = new XMLHttpRequest();
                        xhr.responseType = 'blob';
                        xhr.onload = function(event) {
                            var blob = xhr.response;
                        };
                        window.open(url, '_blank');
                        xhr.open('GET', url);
                        xhr.send();

                        // Or inserted into an <img> element:
                        var img = document.getElementById('myimg');
                        img.src = url;
                        }).catch(function(error) {
                        // Handle any errors
                        });
      }
  
  </script>


