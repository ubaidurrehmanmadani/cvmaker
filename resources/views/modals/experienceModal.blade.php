

  <!-- Modal -->
  <div class="modal fade" id="experienceModal" role="dialog">
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
                 <label for="title">* Job Title</label>
                 <input type="text" class="form-control" id="title" name="title" placeholder="Designation" required="required">
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="company">* Company</label>
                 <input type="text" class="form-control" id="company" name="company" placeholder="Name" required="required">                 
               </div>
                <div class="col col-sm-6 col-md-2 col-lg-2">
                 <label for="from">* Duration</label>
                 <input type="date" class="form-control" id="from" name="from" placeholder="From" required="required">
               </div>
               <div class="col col-sm-6 col-md-2 col-lg-2">
                <label for="to">To</label>
                 <input type="date" class="form-control" id="to" name="to" placeholder="To" > 
               </div>
             </div>



             <div class="row">
               <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="email">Reference Email </label>
                 <input type="text" class="form-control" id="email" name="email" placeholder="Email">
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="contact">Reference Contact</label>
                 <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" >                 
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="countryId"> Country</label>
                 <select name="country" class="countries order-alpha form-control" id="countryId">
                        <option value="0">Select Country</option>
                    </select>
               </div>
               
             </div>


             <div class="row">
               <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="stateId">Province </label>
                 <select name="state" class="states order-alpha form-control" id="stateId">
                        <option value="0">Select Province</option>
                    </select>
               </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                 <label for="cityId">City</label>
                  <select name="city" class="cities order-alpha form-control" id="cityId">
                        <option value="">Select City</option>
                    </select>                
               </div>
                
               
             </div>

            
        </div>
        <div class="modal-footer">
          <input type="button" onclick="return addWorkExperience(event,  '{{Auth::user()->id}}')" name="add" value="Add" class="btn btn-success">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  
