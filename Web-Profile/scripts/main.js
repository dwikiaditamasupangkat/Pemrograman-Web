$.ajaxSetup({
  headers : {
      'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
  }
});

// Add your javascript here
// Don't forget to add it into respective layouts where this js file is needed

$(document).ready(function() {
  AOS.init( {
    // uncomment below for on-scroll animations to played only once
    // once: true  
  }); // initialize animate on scroll library
});

// Smooth scroll for links with hashes
$('a.smooth-scroll')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    && 
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
  let index = 0;
  const totalWorkItems = 4;
  // lightbox 
  $(".cc-effect").click(function(){
    if($(this).hasClass("hobi1")){
      index =0;
    }else if($(this).hasClass("hobi2")){
      index =1;
    }else if($(this).hasClass("hobi3")){
      index =2;
    }else if($(this).hasClass("hobi4")){
      index =3;
    }
    
    $(".lightbox").addClass("open");
    lightboxSlideShow();
  })
  $(".lightbox .prev").click(function(){
      if(index == 0){
        index = totalWorkItems-1;
      }
      else{
      index--;
      }
      lightboxSlideShow();
  })
  $(".lightbox .next").click(function(){
    if(index == totalWorkItems-1){
      index = 0
    }
    else{
      index++;
    }
    lightboxSlideShow();
  })

  // close lightbox 
  $(".lightbox-close").click(function(){
    $(".lightbox").removeClass("open");
  })

  // close lightbox when clicked outside of img-box 
  $(".lightbox").click(function(event){
    if($(event.target).hasClass("lightbox")){
      $(this).removeClass("open");
    }
  })

  function lightboxSlideShow(){
    const imgSrc = $(".cc-effect").eq(index).find("img").attr("data-large");
    const category = $(".cc-effect").eq(index).find(".h4").html();
    $(".lightbox-img").attr("src",imgSrc);
    $(".lightbox-category").html(category)
    $(".lightbox-counter").html((index+1) + "/" + totalWorkItems);
  }

  $(document).ready(function(){
    $("ul li a").click(function(){
      $("li a").removeClass("navbar-active");
      $(this).addClass("navbar-active");
  });
});

$(".printPage").click(function(){
  window.print();
  return false;
});

$(document).ready(function(){
  $("#hobby-btn").click(function(){
    $(".hobi1").slideDown("slow");
    $(".hobi2").slideDown("slow");
    $(".hobi3").slideDown("slow");
    $(".hobi4").slideDown("slow");
  });
});
$(document).ready(function(){
  $("#hobby-btn").click(function(){
    $("#hobby-btn").hide();
  });
});

$(document).ready(function() {
  $('#pendidikan').DataTable();
} );

$(document).ready(function(){
  //Mengirimkan Token Keamanan
  $.ajaxSetup({
      headers : {
          'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('.data').load("data.php");
  $("#save").click(function(){
      var data = $('.form-data').serialize();
      var tahun = document.getElementById("tahun").value;
      var jenis = document.getElementById("jenis").value;
      var nama_pendidikan = document.getElementById("nama_pendidikan").value;
      var tipe = document.getElementById("tipe").value;
      var deskripsi = document.getElementById("deskripsi").value;

      if (tahun=="") {
        document.getElementById("err_tahun").innerHTML = "Years Must Be Filled In";
      } else {
        document.getElementById("err_tahun").innerHTML = "";
      }
      if (jenis=="") {
        document.getElementById("err_jenis").innerHTML = "Kind Of Education Be Filled In";
      } else {
        document.getElementById("err_jenis").innerHTML = "";
      }
      if (nama_pendidikan=="") {
        document.getElementById("err_nama_pendidikan").innerHTML = "Name Of Educational Institution Be Filled In";
      } else {
        document.getElementById("err_nama_pendidikan").innerHTML = "";
      }
      if (tahun!="" && jenis!=""  && nama_pendidikan!="") {      
        $.ajax({
            type: 'POST',
            url: "form_action.php",
            data: data,
            success: function() {
                $('.data').load("data.php");
                document.getElementById("id").value = ""
                document.getElementById("form-data").reset();
            }, error: function(response){
              console.log(response.responseText);
            }
        });
      } 
  });
});

$(document).on('click', '.delete', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "delete_action.php",
        data: {id:id},
        success: function() {
            $('.data').load("data.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});

