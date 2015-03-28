$(document).ready(function($) {
	 var logo_options = {
             $AutoPlay: true,                                    
             $AutoPlaySteps: 1,                                  
             $AutoPlayInterval: 0,                            
             $PauseOnHover: 4,                               
             $ArrowKeyNavigation: true,   			            
             $SlideEasing: $JssorEasing$.$EaseLinear,          
             $SlideDuration: 1600,                             
             $MinDragOffsetToSlide: 20,                        
             $SlideWidth: 190,                                 
             //$SlideHeight: 100,                              
             $SlideSpacing: 0, 					              
             $DisplayPieces: 7,                            
             $ParkingPosition: 0,                          
             $UISearchMode: 1,                             
             $PlayOrientation: 1,                          
             $DragOrientation: 1                           
         };

         var logo_jssor_slider = new $JssorSlider$("logoSlider_container", logo_options);

         //responsive code begin
         //you can remove responsive code if you don't want the slider scales while window resizes
         function logoScaleSlider() {
             var bodyWidth = document.body.clientWidth;
             if (bodyWidth)
            	 logo_jssor_slider.$ScaleWidth(Math.min(bodyWidth, 1200));
             else
                 window.setTimeout(logoScaleSlider, 30);
         }
         logoScaleSlider();

         $(window).bind("load", logoScaleSlider);
         $(window).bind("resize", logoScaleSlider);
         $(window).bind("orientationchange", logoScaleSlider);
});
