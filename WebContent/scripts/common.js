$(document).ready(function() {

	$("#footerSec").load("includes/footer.html");
	
	$("#formSec").load("includes/contact-form.html");

	$(".menu-img").click(function() {
		$(".menu-tog").slideToggle("slow");
	});
	
	$('img').removeAttr('width height');
	
});

function activateMenu(){
	var pathname = location.pathname;
	
	if(pathname.indexOf('home') > -1){
		$('#homeId').addClass('active arrow_box');
	}else if(pathname.indexOf('services') > -1 || pathname.indexOf('tech-consulting') > -1 
			|| pathname.indexOf('business-solutions.html') > -1 || pathname.indexOf('infra-management') > -1 ){
		$('#servicesId').addClass('active arrow_box');
	}else if(pathname.indexOf('careers') > -1 || pathname.indexOf('technology') > -1 
			|| pathname.indexOf('clients') > -1 || pathname.indexOf('career') > -1){
		$('#careersId').addClass('active arrow_box');
	}else if(pathname.indexOf('about-us') > -1 || pathname.indexOf('vision') > -1 
			|| pathname.indexOf('principles') > -1 || pathname.indexOf('quality') > -1){
		$('#aboutusId').addClass('active arrow_box');
	}else if(pathname.indexOf('contact-us') > -1){
		$('#contactusId').addClass('active arrow_box');
	}else{
		$('#homeId').addClass('active arrow_box');
	}
}

function initialize() {
	var map;
	var infowindow = new google.maps.InfoWindow();
	var geocoder = new google.maps.Geocoder();
	var address = "11501 Dublin Blvd, Suite 200, Dublin, CA 94568, United States";
	geocoder.geocode({
		'address' : address
	}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map : map,
				position : results[0].geometry.location,
				title : 'Sapphire Software Solutions\n 11501 Dublin Blvd, Suite 200\n Dublin, CA 94568\n United States'
			});
			infowindow.setContent("Sapphire Software Solutions Inc.");
			infowindow.open(map, marker);
		} else {
			alert("Geocode was not successful for the following reason: "
					+ status);
		}
	});
	var latlng = new google.maps.LatLng(37.6991318, -121.9450889);
	var mapOptions = {
		zoom : 14,
		center : latlng
	}
	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
}

function validateForm(){
	if ($("#name").val() == "") {
		alert('Please enter your name');
		$("#name").focus();
		return false;
	} else if ($("#email").val() == "") {
		alert('Please enter your e-mail address');
		$("#email").focus();
		return false;
	} else if ($("#phone").val() == "") {
		alert('Please enter your phone number');
		$("#phone").focus();
		return false;
	} else if ($("#subject").val() == "") {
		alert('Please enter the subject');
		$("#subject").focus();
		return false;
	} else if ($("#message").val() == "") {
		alert('Please enter the message');
		$("#message").focus();
		return false;
	}
	if($("#email").val()){
		var x = $("#email").val();
	    var atpos = x.indexOf("@");
	    var dotpos = x.lastIndexOf(".");
	    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	        alert("Please enter a valid e-mail address");
	        return false;
	    }
	}
	
	return true;
}