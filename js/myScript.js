// delete post
$(document).ready(function(){
  $(".delete_post").click(function(e){
    e.preventDefault();
   var idPosta = $(this).data("id");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('admin/delete_post.php', {
      method: "GET",
      data: {
        id: idPosta
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){
          console.log(pristigliPodaci);
          console.log(statusTekst);
          console.log(rezultatObj);
          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan post";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska;
        // console.error(greska);
      }
   });
 });
});


// edit post
$(document).ready(function(){
$(".edit_post").click(function(e){
  e.preventDefault();
 var idPost = $(this).data("id");

$.ajax({
  url: 'admin/edit_post.php',
  method: 'GET',
  data:{
    id: idPost
  },
  success : function(podaci, textStatus, objUspeh){
    console.log(podaci);
    console.log(typeof podaci);

    podaci = JSON.parse(podaci);

    console.log(podaci);
    console.log(podaci.idPost);

    $("#headingPost").val(podaci.heading);
    $("#contentPost").val(podaci.content);
    $("#quotesPost").val(podaci.quotes);
    $("#imagePost").val(podaci.bigImage);
    $("#idPost").val(podaci.idPost);

    $("#btnPost").text("update");
    $("#contactFormPost").attr("action","admin/edit_form_post.php");


  },
  error: function(error, textError, objGreska){
    console.log(error);
  }
});
});
});


$(document).ready(function(){
  $(".delete_about").click(function(e){
    e.preventDefault();
   var idAbout = $(this).data("id");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('admin/delete_about.php', {
      method: "GET",
      data: {
        id: idAbout
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){
          console.log(pristigliPodaci);
          console.log(statusTekst);
          console.log(rezultatObj);
          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan sadrzaj";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska;
        // console.error(greska);
      }
   });
 });
});



$(document).ready(function(){
  $(".delete_choose").click(function(e){
    e.preventDefault();
   var idChoose = $(this).data("id");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('admin/delete_choose.php', {
      method: "GET",
      data: {
        id: idChoose
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){
          console.log(pristigliPodaci);
          console.log(statusTekst);
          console.log(rezultatObj);
          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan sadrzaj";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska;
        // console.error(greska);
      }
   });
 });
});




$(document).ready(function(){
  $(".delete_gallery").click(function(e){
    e.preventDefault();
   var idGallery = $(this).data("id");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('admin/delete_gallery.php', {
      method: "GET",
      data: {
        id: idGallery
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){
          console.log(pristigliPodaci);
          console.log(statusTekst);
          console.log(rezultatObj);
          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan sadrzaj";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska;
        // console.error(greska);
      }
   });
 });
});





$(document).ready(function(){
  $(".delete_course").click(function(e){
    e.preventDefault();
   var idCourse = $(this).data("id");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('admin/delete_course.php', {
      method: "GET",
      data: {
        id: idCourse
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){
          console.log(pristigliPodaci);
          console.log(statusTekst);
          console.log(rezultatObj);
          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan sadrzaj";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska;
        // console.error(greska);
      }
   });
 });
});




$(document).ready(function(){
  $(".delete_customer").click(function(e){
    e.preventDefault();
   var idCustomer = $(this).data("id");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('admin/delete_customer.php', {
      method: "GET",
      data: {
        id: idCustomer
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){
          console.log(pristigliPodaci);
          console.log(statusTekst);
          console.log(rezultatObj);
          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan sadrzaj";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska;
        // console.error(greska);
      }
   });
 });
});
