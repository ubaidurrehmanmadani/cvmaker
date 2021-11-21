

<ul id="sortable1" class="connectedSortable ui-helper-reset">
    <li class="ui-state-default">
       <div >
            <div class="row" style="background-color: white;">
                <div class="col col-sm-6 col-md-6 col-lg-6"><label ><b><i class="fas fa-file"> Summary</i></b></label></div>
                <div class="col col-sm-6 col-md-6 col-lg-6" ><input type="button" onclick="editSummary()" class="button" value="Edit" style="float: right;"></div>
            </div>
            <div class="row">
                 <div class="col col-sm-12 col-md-12 col-lg-12" >
                      <textarea onclick="editSummary()" class="main" id="summary" contenteditable="true"  oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
                 </div>
            </div>
        </div>
    </li>
    <li class="ui-state-default">
        <div>
            <div class="row">
                <div class="col col-sm-6 col-md-6 col-lg-6"><label><b><i class="fas fa-tasks"> Work History</i></b></label></div>
                <div class="col col-sm-6 col-md-6 col-lg-6" ><input type="button" onclick="showExperienceModal()" class="button" value="+Add Experience" style="float: right;"></div>
            </div>
            <div id="WorkExperienceDiv">
                <div class="row">
                     <div class="col col-sm-12 col-md-12 col-lg-12" >
                        <div class="row">
                            <div class="col col-sm-6 col-md-6 col-lg-6">
                                <input class="experience" type="text" onclick="showExperienceModal1()" name="jobTitle" id="jobTitle" placeholder="Title">
                            </div>
                            <div class="col col-sm-6 col-md-6 col-lg-6" >
                                <input class="experience text-right" type="text" onclick="showExperienceModal1()" name="experienceDates" id="experienceDates">
                            </div>
                        </div>
                     </div>
                </div>


                <div class="row">
                     <div class="col col-sm-12 col-md-12 col-lg-12" >
                        <div class="row">
                            <div class="col col-sm-6 col-md-6 col-lg-6">
                                <input class="experience" type="text" onclick="showExperienceModal1()" name="companyName" id="companyName" placeholder="Company">
                            </div>
                            <div class="col col-sm-6 col-md-6 col-lg-6" >
                                <input class="experience text-right" type="text" onclick="showExperienceModal1()" name="jobLocation" id="jobLocation" placeholder="Area">
                            </div>
                        </div>
                     </div>
                </div>
            </div>


        </div>
    </li>
    
</ul>

       

<div class="row">
 @include('modals.summaryModal') 
 @include('modals.experienceModal')
 @include('modals.updateExperienceModal')
</div>



 