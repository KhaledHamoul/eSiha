<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layout.aside_menu_labo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                                        <thead>
                                            <tr role="row">
                                                <th  style="width: 130.4px;">Patient</th>
                                                <th  style="width: 90.4px;">Type</th>
                                                <th  style="width: 90.4px;">Wilaya</th>
                                                <th  style="width: 90.4px;">Date</th>
                                                <th  style="width: 190.4px;">Détails</th>
                                                <th  style="width: 50.4px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">OUMELLAL Abdessalam</td>
                                                <td>RADIO</td>
                                                <td>Alger</td>
                                                <td>2008/11/28</td>
                                                <td>Pieds</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">KERFAH Issam</td>
                                                <td>RADIO</td>
                                                <td>Boumerdess</td>
                                                <td>2009/10/09</td>
                                                <td>Tete</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>                                                
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">GUERRAS Mohamed</td>
                                                <td>ANALYSES</td>
                                                <td>Blida</td>
                                                <td>2009/01/12</td>
                                                <td>IRM FNM</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">BATOUCHE Oussama</td>
                                                <td>ANAYSES</td>
                                                <td>Tiaret</td>
                                                <td>2012/10/13</td>
                                                <td>Sang</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">HAMOUL Khaled</td>
                                                <td>ANALYSES</td>
                                                <td>Oran</td>
                                                <td>2011/06/07</td>
                                                <td>IRM FNS</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">CHAREF Raouf</td>
                                                <td>RADIO</td>
                                                <td>Annaba</td>
                                                <td>2012/12/02</td>
                                                <td>Dos</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">BOUKHOULDA Salah</td>
                                                <td>ANALYSES</td>
                                                <td>Setif</td>
                                                <td>2011/05/03</td>
                                                <td>FNS</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">BENABDELLAH Farouk</td>
                                                <td>RADIO</td>
                                                <td>Tipaza</td>
                                                <td>2011/12/12</td>
                                                <td>Pied</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">MEBAREK Nassim</td>
                                                <td>ANALYSES</td>
                                                <td>Alger</td>
                                                <td>2011/12/06</td>
                                                <td>IRM</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">CHOHRA Mohamed</td>
                                                <td>RADIO</td>
                                                <td>Ouaregla</td>  
                                                <td>2012/03/29</td>
                                                <td>Cous</td>
                                                <td><button type="button" style="margin-right:20%;" class="btn btn-success">RESULTAT</button></td>
                                            </tr></tbody>
                                    </table>
                               <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
          
         
        </div>
         </div>
          </div>
          </div>
        <!-- End Page wrapper  -->









        <!-- Large modal -->
<div class="container mt-5">
  <button class="btn btn-success btn-block btn-lg" id="modalToggle">Launch the modal</button>
</div>

<div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wizard-title">Campaign Wizard</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#infoPanel" role="tab">Info</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ads" role="tab">Ads</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#placementPanel" role="tab">Placement</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#schedulePanel" role="tab">Schedule</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#reviewPanel" role="tab">Review</a>
          <li>
        </ul>
        
        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="infoPanel" role="tabpanel">
            <h4>Information</h4>
            <div class="form-group">
              <label for="campaignName">Campaign Name</label>
              <input type="text" class="form-text" id='campaignName'></input>
            </div>
            <button class="btn btn-secondary" id="infoContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="ads" role="tabpanel">
            <h4>Ads</h4>
            <div class="form-group">
              <label for="exampleInputFile">Fullscreen Ad Image</label>
              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">Select a file to use as the fullscreen ad image. Please ensure the size is at least 1080x1920 with a 9:16 (portrait) aspect ratio.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Banner Ad Image</label>
              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">Select a file to use as the banner ad image. Please ensure the size is exactly 1080x450 for proper rendering.</small>
            </div>
            <button class="btn btn-secondary" id="adsContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="placementPanel" role="tabpanel">
            <h4>Placement</h4>
            <div id="accordion" class="mb-3" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Entire Venue
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="venueSelect">Select a Venue</label>
                      <select class="form-control" id="venueSelect">
                        <option selected disabled>Choose a venue</option>
                        <option>Venue 1</option>
                        <option>Venue 2</option>
                        <option>Venue 3</option>
                        <option>Venue 4</option>
                        <option>Venue 5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Specific Kiosks
                    </a>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="kioskSelectVenue">First, choose a venue.</label>
                      <select class="form-control" id="kioskSelectVenue">
                        <option selected disabled>Choose a venue</option>
                        <option>Venue 1</option>
                        <option>Venue 2</option>
                        <option>Venue 3</option>
                        <option>Venue 4</option>
                        <option>Venue 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect2">Then select kiosks (you can select multiple)</label>
                      <select multiple class="form-control" id="exampleSelect2">
                        <option>Kiosk 1</option>
                        <option>Kiosk 2</option>
                        <option>Kiosk 3</option>
                        <option>Kiosk 4</option>
                        <option>Kiosk 5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Specific Screens
                    </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="kioskSelectVenue">First, choose a venue.</label>
                      <select class="form-control" id="kioskSelectVenue">
                        <option selected disabled>Choose a venue</option>
                        <option>Venue 1</option>
                        <option>Venue 2</option>
                        <option>Venue 3</option>
                        <option>Venue 4</option>
                        <option>Venue 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect2">Then select screens (you can select multiple)</label>
                      <select multiple class="form-control" id="exampleSelect2">
                        <option>Kiosk 1 - Screen 1</option>
                        <option>Kiosk 1 - Screen 2</option>
                        <option>Kiosk 2 - Screen 1</option>
                        <option>Kiosk 2 - Screen 2</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-secondary" id="placementContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="schedulePanel" role="tabpanel">
            <h4>Schedule</h4>
            <div id="scheduleAccordion" class="mb-3" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Start and Stop Date
                    </a>
                  </h5>
                </div>

                <div id="scheduleAccordioncollapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Start Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="2018-01-09" id="start-date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Stop Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="2018-01-09" id="stop-date">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Rules for Specific Days
                    </a>
                  </h5>
                </div>
                <div id="scheduleAccordioncollapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block">
                    <h6>Play on the following days (check all that apply)</h6>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="sunday">
                        Sunday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="monday">
                        Monday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="tuesday">
                        Tuesday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="wednesday">
                        Wednesday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="thursday">
                        Thursday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="friday">
                        Friday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="saturday">
                        Saturday
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Rules for Specific Times
                    </a>
                  </h5>
                </div>
                <div id="scheduleAccordioncollapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-block">
                    <h6>Play during the following timeframes (applies to each day)</h6>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">Start Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="13:45:00" id="start-time">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="13:45:00" id="end-time">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-secondary" id="scheduleContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="reviewPanel" role="tabpanel">
            <h4>Review</h4>
            <button class="btn btn-primary btn-block" id="activate">Activate this Campaign!</button>
          </div>
        </div>
        <div class="progress mt-5">
          <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save for later</button>
      </div>
    </div>
  </div>
</div>

        
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>