//js functions

//menu
const menuButtonClose = document.querySelector('#mobile-menu-trigger')
const mainHeader = document.querySelector('#main-header')

menuButtonClose.addEventListener('click', menuButtonOpen)

function menuButtonOpen() {
	mainHeader.classList.toggle("menu-open")
}

$(document).ready(function(){
	  $('.carousel').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  // autoplay: true,
		  autoplaySpeed: 3000,
		  // dots: true,
		  adaptiveHeight: true,
		  // variableWidth: true,
	  });
	});

//smoth-scroll
$(document).ready(function(){
  $('.faq__title__subtitle-anchor').on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top - 100
      }, 500, function(){

        window.location.hash = hash;
      });
    } 
  });
});

//home

$(document).ready(function(){
	if ($(window).width() > 801) {
	  $(window).on('scroll', function(event) {
	  	//right
	  	if($(window).scrollTop() > 10) {
	  		$('.box-1').addClass('box-active');
	  	}
	  	if($(window).scrollTop() > 100) {
	  		$('.box-2').addClass('box-active');
	  	}
	    if($(window).scrollTop() > 800) {
	  		$('.box-3').addClass('box-active');
	  	}
	  	if($(window).scrollTop() < 799) {
	  		$('.box-3').removeClass('box-active');
	  	}
	  	if($(window).scrollTop() > 1450) {
	  		$('.box-4').addClass('box-active');
	  	}
	  	if($(window).scrollTop() < 1449) {
	  		$('.box-4').removeClass('box-active');
	  	}
	  	if($(window).scrollTop() > 1700) {
	  		$('.box-5').addClass('box-active');
	  	}
	  	if($(window).scrollTop() < 1699) {
	  		$('.box-5').removeClass('box-active');
	  	}
	  });
	}
});

$(document).ready(function(){
	if ($(window).width() < 800) {
		$(window).on('scroll', function(event) {
			//right
			if($(window).scrollTop() > 10) {
				$('.box-1').addClass('box-active');
			}
			if($(window).scrollTop() > 100) {
				$('.box-2').addClass('box-active');
			}
		  if($(window).scrollTop() > 200) {
				$('.box-3').addClass('box-active');
			}
		  if($(window).scrollTop() < 199) {
				$('.box-3').removeClass('box-active');
			}
			if($(window).scrollTop() > 350) {
				$('.box-4').addClass('box-active');
			}
		  if($(window).scrollTop() < 344) {
				$('.box-4').removeClass('box-active');
			}
			if($(window).scrollTop() > 360) {
				$('.box-5').addClass('box-active');
			}
			if($(window).scrollTop() < 310) {
				$('.box-5').removeClass('box-active');
			}
		});
	}
	console.log($(window).scrollTop())
});

//home click box
$('.box-1').on('click', () => {
  $('.box-1').toggleClass('box-open');
});
$('.box-2').on('click', () => {
  $('.box-2').toggleClass('box-open');
});
$('.box-3').on('click', () => {
  $('.box-3').toggleClass('box-open');
});
$('.box-4').on('click', () => {
  $('.box-4').toggleClass('box-open');
});
$('.box-5').on('click', () => {
  $('.box-5').toggleClass('box-open');
});

