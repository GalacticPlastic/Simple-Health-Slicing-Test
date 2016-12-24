$(document).foundation();
$(document).foundation('abide', 'events');
$(document).ready(function() {
	console.log("Potato!");
	$('#js-video').on('click', function(event) {
		event.preventDefault();
		$('#js-modal').foundation('open');
	});
	$('.close-reveal-modal').on('click', function(event) {
		$('#js-modal').foundation('close');
	});
	// $('#contact').submit(function(event){
	//     event.preventDefault();
	//     submitForm();
	// });
});
// function submitForm() {
// 	   var name = $("#name").val();
// 	   	var email = $("#email").val();
// 	   	var password = $("#password").val();
// 	   	var dataString = 'name=' + name +
// 	   	'&email=' + email +
// 	   	'&password=' + password;
// 	   	$.ajax({
// 	   		type: "POST",
// 	        url:"/contact.php",
// 	        data: dataString, 
// 	        success: function(data){
// 	        	$("#form-message").removeClass("hidden")
// 	        },
// 	        error: function(jqXHR, status, error){
// 	        	alert("status: " + status + " message: " + error);
// 	        }
// 	    });
// }