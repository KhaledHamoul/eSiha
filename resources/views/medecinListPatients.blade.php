@extends('medecinHome')

@section('content')
  <div class="page-wrapper">
    <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Exporter les données</h4>
                                    <h6 class="card-subtitle">Exporter en Copie, CSV, Excel, PDF &amp; Imprimer</h6>
                                    <div class="table-responsive m-t-40">
                                        <div id="example23_wrapper" class="dataTables_wrapper"><div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Copy</span></a><a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Excel</span></a><a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>PDF</span></a><a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#"><span>Print</span></a></div><div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label></div><table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 195.4px;">Nom</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 299.4px;">Prenom</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 151.4px;">Numero du dossier</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73.4px;">Age</th><th></th></tr>
                                            </thead>
                                            <tbody>

                                            <tr role="row" class="odd">
                                                    <td class="sorting_1">BENSAIB</td>
                                                    <td>Kamel</td>
                                                    <td>34929</td>
                                                    <td>33</td>
                                                    <td><a  style="color:white" class="btn btn-info"><i class="fa fa-user-md"></i></a> <a class="btn btn-warning"><i style="color:white" class="fa fa-pencil"></i></a>  <a  style="color:white" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                              <td class="sorting_1">MEZIANI</td>
                                              <td>Sofiane</td>
                                              <td>76831</td>
                                              <td>21</td>
                                              <td><a  style="color:white" class="btn btn-info"><i class="fa fa-user-md"></i></a> <a class="btn btn-warning"><i style="color:white" class="fa fa-pencil"></i></a>  <a  style="color:white" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                    <td class="sorting_1">SALMAN</td>
                                                    <td>Fayçal</td>
                                                    <td>54678</td>
                                                    <td>23</td>
                                                    <td><a  style="color:white" class="btn btn-info"><i class="fa fa-user-md"></i></a> <a class="btn btn-warning"><i style="color:white"  class="fa fa-pencil"></i></a>  <a  style="color:white" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                              <td class="sorting_1">DERARDJA</td>
                                              <td>Aine</td>
                                              <td>09345</td>
                                              <td>21</td>
                                              <td><a data-toggle="modal" data-target="#nouvelleCons" style="color:white" class="btn btn-info"><i class="fa fa-user-md"></i></a> <a class="btn btn-warning"><i style="color:white" class="fa fa-pencil"></i></a>  <a  style="color:white" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table><div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"><a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a><span><a class="paginate_button current" aria-controls="example23" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example23" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example23" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example23" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example23" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example23" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example23" data-dt-idx="7" tabindex="0" id="example23_next">Next</a></div></div>
                                    </div>
                                </div>
    </div>

  </div>
  
  @include('layout.modals.nouvelleConsultationMedecin')

@endsection
