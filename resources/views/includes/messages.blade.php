


<div id="successModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title alert alert-success">Success</h5>
  
              
            </div>
            <div class="modal-body">
                {{session('success')}}
            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>


      <div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title alert alert-danger">Error</h5>
                 
                </div>
                <div class="modal-body">
                    {{session('error')}}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>





@if(session('success'))
<script type="text/javascript">
    $('document').ready(function(){
        $('#successModal').modal('show');
    });
</script>
@endif

@if(session('error'))
<script type="text/javascript">
    $('document').ready(function(){
        $('#errorModal').modal('show');
    });
</script>
@endif