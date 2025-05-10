/*const shape = document.getElementById("shape");

document.addEventListener("mousemove", (e) => {
    // Update the shape's position to follow the cursor
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    
    // Set the shape's position
    shape.style.left = mouseX + "px";
    shape.style.top = mouseY + "px";
});*/



//navbar
window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".nav-container");
  const scrolled = window.scrollY;

  // Add or remove a CSS class to control the appearance of the navbar when scrolling
  if (scrolled > 400) {
      navbar.classList.add("navbar-scrolled");
  } else {
      navbar.classList.remove("navbar-scrolled");
  }
});

//quick-contact
window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".quick-contact");
  const scrolled = window.scrollY;

  // Add or remove a CSS class to control the appearance of the navbar when scrolling
  if (scrolled > 400) {
      navbar.classList.add("q-c-active");
  } else {
      navbar.classList.remove("q-c-active");
  }
});

window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".quick-contact-wapp");
  const scrolled = window.scrollY;

  // Add or remove a CSS class to control the appearance of the navbar when scrolling
  if (scrolled > 300) {
      navbar.classList.add("q-c-active");
  } else {
      navbar.classList.remove("q-c-active");
  }
});

window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".q-top");
  const scrolled = window.scrollY;

  // Add or remove a CSS class to control the appearance of the navbar when scrolling
  if (scrolled > 600) {
      navbar.classList.add("q-c-active");
  } else {
      navbar.classList.remove("q-c-active");
  }
});








//section-2-seo ranking
$(document).on('ready', function() {
  $(".center").slick({
    dots: false,
    infinite: true,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 3,
   mobileFirst:true,
   autoplay: true, // Add this line
    autoplaySpeed: 2000,
              responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false
                }
              },
              {
                breakpoint: 768,
                settings: {
                 slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 340,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
            ]
    
  });
	
});




//scroll animation
window.addEventListener('scroll',reveals);
function reveals(){
  var reveals= document.querySelectorAll('.scr-anime');
  console.log(reveals+"reveal is this")
  for(var i=0;i<reveals.length;i++){
    var windowHeight=window.innerHeight;
    var revealTop=reveals[i].getBoundingClientRect().top
    var revealpoint=100;

    if(revealTop < windowHeight - revealpoint){
      reveals[i].classList.add('actives')
    }
    else{
      reveals[i].classList.remove('actives')
    }
  }
}


/*count numbers
*/
      let valueDisplays=document.querySelectorAll(".num");
      let interval =2000;
    valueDisplays.forEach((valueDisplays) => {
        let startValue =0
        let endValue = parseInt(valueDisplays.getAttribute("data-val"))
        let duration = Math.floor(interval/endValue)
        let counter = setInterval(function(){
    startValue += 1;
    valueDisplays.textContent = startValue
    if(startValue == endValue){
      clearInterval(counter);
    }
  },duration)
})

 
//partners card slider
$(document).ready(function(){
  $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 3
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });
});



//9th section
function question(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}



//12th section
$(document).on('click', '.map-point-sm', function() {
  var show = $(this).data('show');
  $(show).removeClass("hide").siblings().addClass("hide");
});

$(document).ready(function(){
  $('.review-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      pauseOnHover: true,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          },
          {
              breakpoint: 520,
              settings: {
                  slidesToShow: 1
              }
          }
      ]
  });
});


$(document).ready(function(){
  $('.inst_slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      pauseOnHover: true,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          },
          {
              breakpoint: 520,
              settings: {
                  slidesToShow: 1
              }
          }
      ]
  });
});

$(document).on('click', '.step', function() {
  var show = $(this).data('show');
  $(show).removeClass("hide").siblings().addClass("hide");
  });
  
  
  
  
  
  
  
  
  
  
     var acc = document.getElementsByClassName("accordion");
     var i;
     
     for (i = 0; i < acc.length; i++) {
       acc[i].addEventListener("click", function() {
         this.classList.toggle("active");
         var panel = this.nextElementSibling;
         if (panel.style.maxHeight) {
           panel.style.maxHeight = null;
         } else {
           panel.style.maxHeight = panel.scrollHeight + "px";
         } 
       });
     }


     $(document).ready(function(){
      $('.rank_slider').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: true,
          dots: false,
          pauseOnHover: true,
          responsive: [
              {
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 1
                  }
              },
              {
                  breakpoint: 520,
                  settings: {
                      slidesToShow: 1
                  }
              }
          ]
      });
    });
    
    
    
    
    // web slider
$(document).ready(function(){
  $('.web_slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      pauseOnHover: true,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          },
          {
              breakpoint: 520,
              settings: {
                  slidesToShow: 1
              }
          }
      ]
  });
});

// $(document).ready(function() {
//   $('.navbar-toggler').click(function() {
//       $('.overlay').toggleClass('show');
//       $('.navbar-collapse').toggleClass('show');
//       $('.sm_navitem').toggleClass('show');
//        // Toggle the 'show' class
//   });

//   $('.close_btn').click(function() {
//       $('.overlay').removeClass('show');
//       $('.navbar-collapse').removeClass('show');
//       $('.sm_navitem').removeClass('show');
//   });
// });


// $(document).ready(function() {
//   $('.nav-item.dropdown').on('show.bs.collapse', function() {
//       $('.nav-item.dropdown .dropdown-menu').collapse('hide');
//   });
// });