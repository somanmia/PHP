    
	$(document).ready(function(){
	    
	      $('.dd-menu').addClass('open');
		  $('.dd-btn').click(function(){
		     $('.dd-menu').toggleClass('open');
		  
		  });
		  $('.nav-bar').addClass('hide-display');
		  $('.res').click(function(){
		    $('.nav-bar').toggleClass('hide-display');
		    
		  });
	  
	  });