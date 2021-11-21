<script type="application/javascript">
  $(function () {
$("#sortable1").sortable({
    connectWith: '.connectedSortable, #trash'
}).disableSelection();
});


function editSummary() {   
    $('#myModal').modal('show');    
    $('#summaryEditor').text($('#summary').val());
}


function showExperienceModal() {   
    $('#experienceModal').modal('show');    
    //$('#summaryEditor').text($('#summary').val());
}


function showExperienceModal1() {      
     $('#updateExperienceModal').modal('show'); 
     var id = '{{Auth::user()->id}}';   
    $.ajax({
            type:'GET',
            url:'{{url("/getWorkExperience")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(response){
                //alert(response.success.job_title)
                var string = response.success;
                //alert(string.length)
                for (var i = 0; i < string.length; i++) {  
                    $('#updatetitle').val(string[i].job_title);
                    $('#updatecompany').val(string[i].company);                    
                    $('#updateemail').val(string[i].refference_email);
                    $('#updatecontact').val(string[i].refference_contact);
                    $('#updatecountry').val(string[i].country);
                    $('#updatestate').val(string[i].state);
                    $('#updatecity').val(string[i].city);
                    $('#experienceId').val(string[i].id);
                    $('#updatefrom').val(string[i].from.toLocaleString("sv-SE", {
                          year: "numeric",
                          month: "2-digit",
                          day: "2-digit",
                        /*  hour: "2-digit",
                          minute: "2-digit",*/
                          
                      }).replace(" ", "T"));
                    $('#updateto').val(string[i].to.toLocaleString("sv-SE", {
                          year: "numeric",
                          month: "2-digit",
                          day: "2-digit",
                        /*  hour: "2-digit",
                          minute: "2-digit",*/
                          
                      }).replace(" ", "T"));
                }
                 
    }
    });
}

function updateSummary(event,userId) {
    var summary = document.getElementById('summaryEditor').value;      
    event.preventDefault();
    $.ajax({
            type:'POST',
            url:'{{url("/updateSummary")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{summary:summary,id:userId},
            success:function(response){
               // alert(response.summary);
                $('#myModal').modal('hide');          
                $('#summary').html(response.summary);

    }
        });

}


function addWorkExperience(event,userId) {
    var title = document.getElementById('title').value;
    var company = document.getElementById('company').value;
    var from = document.getElementById('from').value;      
    var to = document.getElementById('to').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var country = document.getElementById('countryId').value;
    var state = document.getElementById('stateId').value;
    var city = document.getElementById('cityId').value; 
    event.preventDefault();
    $.ajax({
            type:'POST',
            url:'{{url("/addWorkExperience")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{title:title,id:userId,company:company,from:from,to:to,email:email,contact:contact,country:country,state:state,city:city},
            success:function(response){
               // alert(response.summary);
                $('#myModal').modal('hide');          
                $('#summary').html(response.summary);

    }
        });

}




function getSummary() {
    var id = '{{Auth::user()->id}}';   
    $.ajax({
            type:'GET',
            url:'{{url("/getSummary")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(data){
                //alert(data.success)
                console.log(data)
                 //$('#summary').text('');
                 //$('#summary').html(response.success.summary);
                 $('#summary').text(data.success.summary);
    }
    });
}



function getWorkExperience() {
    var id = '{{Auth::user()->id}}';   
    $.ajax({
            type:'GET',
            url:'{{url("/getWorkExperience")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(response){
                //alert(response.success.job_title)
                var string = response.success;
                //alert(string.length)
                for (var i = 0; i < string.length; i++) {   
                    $("#jobTitle").val(string[i].job_title);
                    $("#experienceDates").val(string[i].from+" to "+string[i].to);
                    $("#companyName").val(string[i].company);
                    $("#jobLocation").val(string[i].city+", "+string[i].country);
                }
                 
    }
    });
}



function updateWorkExperience(event,userId) {
    var title = document.getElementById('updatetitle').value;
    var company = document.getElementById('updatecompany').value;
    var from = document.getElementById('updatefrom').value;      
    var to = document.getElementById('updateto').value;
    var email = document.getElementById('updateemail').value;
    var contact = document.getElementById('updatecontact').value;
    var country = document.getElementById('updatecountry').value;
    var state = document.getElementById('updatestate').value;
    var city = document.getElementById('updatecity').value; 
    var experienceId = document.getElementById('experienceId').value; 
    event.preventDefault();
    $.ajax({
            type:'POST',
            url:'{{url("/updateWorkExperience")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{title:title,id:userId,company:company,from:from,to:to,email:email,contact:contact,country:country,state:state,city:city,experienceId:experienceId},
            success:function(response){
               // alert(response.summary);
                $('#updateExperienceModal').modal('hide');          
               // $("#WorkExperienceDiv").load(" #WorkExperienceDiv");

    }
        });

}




$(document).ready(function(){    
    getSummary();
    getWorkExperience();
})

       


</script>