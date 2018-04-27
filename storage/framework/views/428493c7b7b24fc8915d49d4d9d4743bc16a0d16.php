

<!-- MODAL -->

<div class="container">
  <!-- Trigger the modal with a button -->
  <button  type="button" class="btn btn-dark btn-outline m-b-10 m-l-5 pull-right" data-toggle="modal"  data-target="#myModal">+ Analyse / Radio</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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

     </div>
          </div>
                            </div>
        </div>
         </div>
          </div>
          </div>
        <!-- End Page wrapper  -->


<script>

removeDiv = function () {
   $('.modal-backdrop').remove();
    //alert('kjfd');
}

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
