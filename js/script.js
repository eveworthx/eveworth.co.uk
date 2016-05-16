var date = new Date();
var hour = date.getHours(); 

if (hour >= 4 && hour < 7) {
	console.log("dawn");
	$( "#window_view" ).addClass( "window_dawn" );


} else if (hour >= 7 && hour < 17) {
	console.log("morning");
	$( "#window_view" ).addClass( "window_morning" );
	$( "#clouds").removeClass( "no_clouds" );


} else if (hour >= 17 && hour < 20) {
	console.log("evening");
	$( "#window_view" ).addClass( "window_evening" );


} else if (hour >= 20 || hour < 4) {
	console.log("night");
	$( "#window_view" ).addClass( "window_night" );

}



	// Preload navigation images
	logo_hover = new Image();
	about_hover = new Image();
	portfolio_hover = new Image();
	contact_hover = new Image();
	
	logo_hover.src = "/img/logo_hover.png";
	about_hover.src = "/img/about_hover.png";
	portfolio_hover.src = "/img/portfolio_hover.png";
	contact_hover.src = "/img/contact_hover.png";


// Contact Form Validation
$( "#contact_form" ).submit(function( event ) {

  // Check 'message' length
  if ( $( "#inputMessage" ).val().length < 1 ) {
  	$("#inputErrorMessage").show();
  	$("#inputErrorMessageGlyph").show();
    $("#inputSuccessMessageGlyph").hide();
    $("#inputSuccessMessage").hide();

  	$("#formgroupMessage").addClass('has-error has-feedback');
  	$("#formgroupMessage").removeClass('has-success');

  	// Put the user in the message field
  	$( "#inputMessage" ).focus();

  	// Prevent the form from submitting
  	event.preventDefault();
  }

  // Check 'email' length
  if ( $( "#inputEmail" ).val().length < 1 ) {
  	$("#inputErrorEmail").show();
  	$("#inputErrorEmailGlyph").show();
    $("#inputSuccessEmailGlyph").hide();
    $("#inputSuccessEmail").hide();

  	$("#formgroupEmail").addClass('has-error has-feedback');
  	$("#formgroupEmail").removeClass('has-success');

  	// Put the user in the email field
  	$( "#inputEmail" ).focus();

  	// Prevent the form from submitting
  	event.preventDefault();
  }

  // Check 'name' length
  if ( $( "#inputName" ).val().length < 1 ) {
  	$("#inputErrorName").show();
  	$("#inputErrorNameGlyph").show();
    $("#inputSuccessNameGlyph").hide();
    $("#inputSuccessName").hide();

  	$("#formgroupName").addClass('has-error has-feedback');
  	$("#formgroupName").removeClass('has-success');

  	// Put the user in the name field
  	$( "#inputName" ).focus();

	// Prevent the form from submitting
  	event.preventDefault();
  }

  //return;
});



$( "#inputName" ).on('focusout', function() {
  // Check 'name' length
  if ( $( "#inputName" ).val().length > 1 ) {
  	$("#inputSuccessName").show();
  	$("#inputSuccessNameGlyph").show();
  	$("#inputErrorName").hide();
  	$("#inputErrorNameGlyph").hide();
  	$("#formgroupName").addClass('has-success has-feedback');
  	$("#formgroupName").removeClass('has-error');
  }
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

$( "#inputEmail" ).on('focusout', function() {
  // Check 'name' length
  if ( $( "#inputEmail" ).val().length > 1 && isEmail($("#inputEmail").val()) ) {
  	$("#inputSuccessEmail").show();
  	$("#inputSuccessEmailGlyph").show();
  	$("#inputErrorEmail").hide();
  	$("#inputErrorEmailGlyph").hide();
  	$("#formgroupEmail").addClass('has-success has-feedback');
  	$("#formgroupEmail").removeClass('has-error');
  }
});

$( "#inputMessage" ).on('focusout', function() {
  // Check 'name' length
  if ( $( "#inputMessage" ).val().length > 1 ) {
  	$("#inputSuccessMessage").show();
  	$("#inputSuccessMessageGlyph").show();
  	$("#inputErrorMessage").hide();
  	$("#inputErrorMessageGlyph").hide();
  	$("#formgroupMessage").addClass('has-success has-feedback');
  	$("#formgroupMessage").removeClass('has-error');
  }
});


