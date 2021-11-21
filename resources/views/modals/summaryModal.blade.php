

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form method="POST">
        <div class="modal-header">
            <h4 class="modal-title">Summary</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
              
                <textarea id="summaryEditor" name="summaryEditor"  oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
        </div>
        <div class="modal-footer">
          <input type="button" onclick="return updateSummary(event,  '{{Auth::user()->id}}')" name="update" value="Update" class="btn btn-success">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  
