jQuery(document).ready(function($){

		// setTimeout(function(){
		// 	$('#intro').addClass('remove');
		// 	setTimeout(function(){
		// 		$('#intro').css('z-index','1');
		// 	}, 1000);
		// }, 2000);

	$themeDir = 'http://localhost/abigail_stern/wp-content/themes/abigail_stern/';
	//Home scroller
	// $("div#scrollableArea").smoothDivScroll({
	// 	autoScrollingMode: "",
	// 	setupComplete: function(eventObj, data) {
	// 		$('.scrollableArea').width('20000000em');
	// 		$('#scrollableArea').addClass('max');
	// 		$scrollableWidth = [];
	// 		$('.work-row').each(function(){
	// 			$width = $(this).width();
	// 			$scrollableWidth.push($width);
	// 		});
	// 		console.log($scrollableWidth);
	// 		$sW = Math.max.apply(Math,$scrollableWidth);
	// 		$('#scrollableArea').removeClass('max');
	// 		$('.scrollableArea').width($sW);
	// 		console.log(data);
	// 	}
	// });

	//Single slider
	$('.rightarrow').on('click',next_slide);
	$('.leftarrow').on('click',prev_slide);

	function next_slide(){
		$('.rightarrow, .leftarrow').off();
		$action = 'next-slide';
		$prevID = $('#work-prev').attr('data-id');
		$thisID = $('#work-curr').attr('data-id');
		$nextID = $('#work-next').attr('data-id');

		//Do the Anim
		$('#work-slides').animate({
			left: "-=810"
		},300,function(){
			//Callback for AJAX
			$.ajax({
			  type: "POST",
			  url: $themeDir+"slideAjax.php",
			  data: { action: $action, nextID: $nextID, curID: $thisID, prevID: $prevID }
			}).done(function(msg) {
				console.log("msg: " + msg);
			    pageurl=$('#work-next').attr('data-link');

				//Reconstruct stage
			    $('#work-prev').remove();
			    $('#work-curr').attr('id','work-prev');
			    $('#work-next').attr('id','work-curr');
			    $(msg).appendTo('#work-slides');
			    $('#work-slides').css('left','-810px');

				//Set click event
				$('.rightarrow').on('click',next_slide);
				$('.leftarrow').on('click',prev_slide);

				//HTML5 URL change
			    if(pageurl!=window.location){
		            window.history.pushState({path:pageurl},'',pageurl);
		        }
		        //return false;

			  });
		});
	}

	function prev_slide(){
		$('.rightarrow, .leftarrow').off();
		$action = 'prev-slide';
		$prevID = $('#work-prev').attr('data-id');
		$thisID = $('#work-curr').attr('data-id');
		$nextID = $('#work-next').attr('data-id');
		//Do the Anim
		$('#work-slides').animate({
			left: "+=810"
		},300,function(){
			//Callback for AJAX
			$.ajax({
			  type: "POST",
			  url: $themeDir+"slideAjax.php",
			  data: { action: $action, nextID: $nextID, curID: $thisID, prevID: $prevID }
			}).done(function(msg) {
			    console.log(msg);
			    pageurl=$('#work-next').attr('data-link');

				//Reconstruct stage
			    $('#work-next').remove();
			    $('#work-curr').attr('id','work-next');
			    $('#work-prev').attr('id','work-curr');
			    $(msg).prependTo('#work-slides');
			    $('#work-slides').css('left','-810px');

				//Set click event
				$('#.rightarrow').on('click',next_slide);
				$('#.leftarrow').on('click',prev_slide);

				//HTML5 URL change
			    if(pageurl!=window.location){
		            window.history.pushState({path:pageurl},'',pageurl);
		        }
		        //return false;

			  });
		});
	}

});
