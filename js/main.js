$(document).ready(function(){	
	$('.gallery-images img').click(function(){
		if($(window).width() > 460){
			//fill container with image
			var imgSrc = "";
			imgSrc = $(this).attr('src');
			$('.big-image').html('<img src="' + imgSrc.replace('thumb','big') + '" alt="" />');
			//use jquery ui to slide large image container out
		$('.image-pop').show('slide', {}, 500);
		}//end if		
	});//end image click	

	//on button click hide image
	$('.close-image-button').click(function(){
		$('.image-pop').hide('slide', {}, 500);
	});//end close click

    var requestStr = "http://randomword.setgetgo.com/get.php";

    $.ajax({
        type: "GET",
        url: requestStr,
        dataType: "jsonp",
        success: RandomWordComplete
 	});

    function RandomWordComplete(data) {
    	var searchWord = data.Word;
    	$('#random-word').html(searchWord).attr('href', 'http://www.google.com/?gws_rd=ssl#safe=active&q=' + searchWord);

    }
});//end document ready