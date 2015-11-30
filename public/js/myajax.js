$(document).ready(function(){
	$(".speaker").click(function(e){
		e.preventDefault();
		// alert(this);
		showSpeakerDetails( $(".details > .name",this).html(),$(".details > .about",this).html() );
	})


	$("#my-slider").unslider({ 
		autoplay: true, 
		arrows: false, 
		nav: false, 
		delay: 4000 });
});

function showSpeakerDetails(name,about)
{
	$("#mymodalname").html(name);	
	$("#mymodalabout").html(about);	
	$("#mymodal").modal("toggle");
}