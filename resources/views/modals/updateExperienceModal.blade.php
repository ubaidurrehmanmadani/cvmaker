

  <!-- Modal -->
  <div class="modal fade" id="updateExperienceModal" role="dialog">
    <div class="modal-dialog modal-xl">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form method="POST">
        <div class="modal-header">
            <h4 class="modal-title">Experience</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body form-body">
              
             <div class="row">
               <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updatetitle">* Job Title</label>
                 <input type="text" class="form-control" id="updatetitle" name="updatetitle" placeholder="Designation" required="required">
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updatecompany">* Company</label>
                 <input type="text" class="form-control" id="updatecompany" name="updatecompany" placeholder="Name" required="required">                 
               </div>
                <div class="col col-sm-6 col-md-2 col-lg-2">
                 <label for="updatefrom">* Duration</label>
                 <input type="date" class="form-control" id="updatefrom" name="updatefrom" placeholder="From" required="required">
               </div>
               <div class="col col-sm-6 col-md-2 col-lg-2">
                <label for="updateto">To</label>
                 <input type="date" class="form-control" id="updateto" name="updateto" placeholder="To" > 
               </div>
             </div>



             <div class="row">
               <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updateemail">Reference Email </label>
                 <input type="text" class="form-control" id="updateemail" name="updateemail" placeholder="Email">
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updatecontact">Reference Contact</label>
                 <input type="text" class="form-control" id="updatecontact" name="updatecontact" placeholder="Contact" >                 
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updatecountry"> Country</label>
                 <input type="text" class="form-control" id="updatecountry" name="updatecountry" placeholder="Country" >
               </div>
               
             </div>


             <div class="row">
               <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updatestate">Province </label>
                 <input type="text" class="form-control" id="updatestate" name="updatestate" placeholder="State" >
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="updatecity">City</label>
                  <input type="text" class="form-control" id="updatecity" name="updatecity" placeholder="City" >
                  <input type="text" class="form-control" id="experienceId" name="experienceId" hidden="hidden">                
               </div>
                
               
             </div>

            
        </div>
        <div class="modal-footer">
          <input type="button" onclick="return updateWorkExperience(event,  '{{Auth::user()->id}}')" name="add" value="Update" class="btn btn-success">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  
