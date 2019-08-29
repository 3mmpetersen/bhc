//Homepage only scripts

// Add Owl Carousel
jQuery(document).ready(function(){
  jQuery(".homepage-slider").owlCarousel(
	  {
		 items:1,
		 dots:false,
		 nav : true,
		 navText : ["<i class='far fa-chevron-left'></i>","<i class='far fa-chevron-right'></i>"],
		 loop: true,
		 autoplay: true,
		 autoplayTimeout: 8000,
		 autoplaySpeed: 2000,
		 autoplayHoverPause: true
		});
		jQuery(".homepage-carousel").owlCarousel(
	  {
		 items:3,
		 dots:false,
		 nav : true,
		 navText : ["<i class='far fa-chevron-left'></i>","<i class='far fa-chevron-right'></i>"],
		 loop: true,
		 autoplay: false,
		 autoplayHoverPause: true,
		 responsive:{
			 750:{
				 items:4
			 }, 
			 1400:{
				 items:6
			 }
		 }
		});
		jQuery(".product-carousel").owlCarousel(
	  {
		 items:1,
		 dots:false,
		 nav : true,
		 navText : ["<i class='far fa-chevron-left'></i>","<i class='far fa-chevron-right'></i>"],
		 loop: true,
		 autoplay: true,
		 autoplayHoverPause: true,
		 responsive:{
			 750:{
				 items:2
			 },
			 1024:{
				 items:3
			 }
		 }
		});
});

jQuery(function() {
	jQuery('.match').matchHeight();
});