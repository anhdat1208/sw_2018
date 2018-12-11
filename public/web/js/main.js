
// JavaScript Wait for window load 	
$(window).on('load',function(){
    /*----- loader ---------*/
    $('.loader').fadeOut(); 
}); 
 

$(document).ready(function(){
	/*----- WoW Animations ---------*/
    wow = new WOW();
    wow.init();

    /*----- Slider CLIENTs---------*/
  	$('.center').slick({
	  centerMode: true,
	  centerPadding: '40px',
	  slidesToShow: 5,
	  focusOnSelect: true,
	  dots: false,
	  infinite: true,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '30px', 
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: false,
	        centerPadding: '20px', 
	        slidesToShow: 2
	      }
	    }
	  ]
	});
});
	 

