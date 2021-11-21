$(function() {      

        $('textarea').each(function() {
        $(this).height($(this).prop('scrollHeight'));
        });       
        $('#profileId').text("Ubaid Ur Rehman");       
        $('#summary1').text("I am Professional Full Stack PHP Laravel Web developer with more than 3 years of experience. I have experience in Frontend & Backend Web Development i.e., Laravel, Vue.js, MySQL, HTML5, CSS3, JavaScript, JQuery and AJAX. I have been developing Web applications for the last couple of years. I have developed Online Shopping Stores, Custom Solutions, Company Websites and Other User Applications. I have also experience of developing ERPs as Remote Developer Team Member.• Over 3+ years of experience in Full Stack web-application development• Using Laravel, Vue.js, JavaScript/jQuery, HTML, SASS, and Eloquent (Laravel•s ORM) with MySQL,•I have developed and integrated applications.• Have extensive experience of working in Vue.JS along with Laravel project and also experienced in working with its famous libraries Vuex, FX Grid, Vuetify.• Expertise in client scripting language and servers IDE scripting languages like JavaScrip");
});

     
      

$(function() {
        $('#profile-div').on('click', function() {
            $('#profile-input').click();
        });
    });

      
      


        $(function() {
        $('#spantext').on('click', function() {
            $('#profile-input').click();
        });
    });

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile-div').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

   

$("#profile-input").change(function(){
    readURL(this);
});


/*$("#files").change(function() {
  filename = this.files[0].name
  console.log(filename);
});

*/

