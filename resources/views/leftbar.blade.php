
  <a class="upload-main">
    <div class="upload-img topMargin">
        <img class="profile-pic" style="position: center;" id="profile-div" class="image">
        <div class="middle">
            <div class="text" id="spantext"><span  class="glyphicon glyphicon-camera"></span>
                <span id="text-img">Upload Image</span></div>
            </div>
        </div>
        <input id="profile-input"  type="file" class="hidden uploadWithID" onChange="img_pathUrl(this);"  name="profile-img"  />
</a>


<div class="row">
    
   <div class="col col-sm-12 col-md-12 col-lg-12 borderTop">
        <div class="row">
            <div class="col col-sm-12 col-md-12 col-lg-12" >
                <textarea id="profileId"  oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
            </div>
        </div>
    </div> 
</div>
 