$(document).ready(function($) {
	var slider_options = {
		$FillMode : 2,
		$AutoPlay : true,
		$AutoPlayInterval : 3000,
		$PauseOnHover : 1,
		$ArrowKeyNavigation : true,
		$SlideEasing : $JssorEasing$.$EaseOutQuint,
		$SlideDuration : 800,
		$MinDragOffsetToSlide : 20,
		//$SlideWidth: 600,                                 
		//$SlideHeight: 300,                                
		$SlideSpacing : 0,
		$DisplayPieces : 1,
		$ParkingPosition : 0,
		$UISearchMode : 1,
		$PlayOrientation : 1,
		$DragOrientation : 1,

		$BulletNavigatorOptions : {
			$Class : $JssorBulletNavigator$,
			$ChanceToShow : 2,
			$AutoCenter : 1,
			$Steps : 1,
			$Lanes : 1,
			$SpacingX : 8,
			$SpacingY : 8,
			$Orientation : 1,
			$Scale : false,
		},

		$ArrowNavigatorOptions : {
			$Class : $JssorArrowNavigator$,
			$ChanceToShow : 1,
			$AutoCenter : 2,
			$Steps : 1
		}
	};

	$("#slider_container").css("display", "block");
	var jssor_slider = new $JssorSlider$("slider_container", slider_options);

	function ScaleSlider() {
		var bodyWidth = document.body.clientWidth;
		if (bodyWidth)
			jssor_slider.$ScaleWidth(Math.min(bodyWidth, 1920));
		else
			window.setTimeout(ScaleSlider, 30);
	}
	ScaleSlider();

	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
	
});
