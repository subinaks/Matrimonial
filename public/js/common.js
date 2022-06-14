// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

$( function() {
  $( "#datepicker" ).datepicker(
    { dateFormat: 'yy-mm-dd' }
  );
} );

    $( function() {
      $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500000,
        values: [ 10000, 80000 ],
        slide: function( event, ui ) {
          $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
        }
      });
      $( "#amount" ).val( "₹" + $( "#slider-range" ).slider( "values", 0 ) +
        " - ₹" + $( "#slider-range" ).slider( "values", 1 ) );
    } );

// Register Form SUbmit
    $('#registerForm').on('submit', (function(e) {
      e.preventDefault();
      var form = $('#registerForm')[0];
      var formData = new FormData(form);
      url='/add-user';
      var validation = 1;
      if (validation == 1) {
          $.ajax({
              url:  url,
              type: 'POST',
              data: formData,
              contentType: false,
              cache: false,
              Z_index:2000,
              processData: false,
              success: function(response) {
                if(response.status==true)
                {
                  swal({
                    icon: "success",
                    text: "Registerd Successfully!",
                });
                  // location.reload();
                }
              }
          });
      }
  }));
