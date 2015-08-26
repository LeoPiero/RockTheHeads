$(document).ready(function(){
	
	$('.gallery-images img').click(function(){
		if($(window).width() > 460){
			//fill container with image
			$('.big-image').html('<img src="' + $(this).attr('src') + '" alt="" />');
			//use jquery ui to slide large image container out
		$('.image-pop').show('slide', {}, 500);
		}//end if		
	});//end image click
	
	

	//on button click hide image
	$('.close-image-button').click(function(){
		$('.image-pop').hide('slide', {}, 500);
	});//end close click
});//end document ready

