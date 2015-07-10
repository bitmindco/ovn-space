jQuery( document ).ready(function(){
	
	var headerHight = jQuery('#main-nav').height();
	jQuery('.content-left-wrap').css('margin-top',headerHight+30);
	
	jQuery("#menu-toggle-search").on("click",function(e) {     
        jQuery(".header-search").toggleClass("toggled");
		return false;
    });
	
	
	/* KNOB */
	jQuery(".skill1").knob({
                'max':100,
                'width': 64,
                'readOnly':true,
                'inputColor':' #FFFFFF ',
                'bgColor':' #b6d5e4  ',
                'fgColor':' #e96656 '
    });
	jQuery(".skill2").knob({
					'max':100,
					'width': 64,
					'readOnly':true,
					'inputColor':' #FFFFFF ',
					'bgColor':' #b6d5e4  ',
					'fgColor':' #e96656 '
	});
	jQuery(".skill3").knob({
					'max': 100,
					'width': 64,
					'readOnly': true,
					'inputColor':' #FFFFFF ',
					'bgColor':' #b6d5e4  ',
					'fgColor':' #e96656 '
	});
	jQuery(".skill4").knob({
					'max': 100,
					'width': 64,
					'readOnly': true,
					'inputColor':' #FFFFFF ',
					'bgColor':' #b6d5e4 ',
					'fgColor':' #e96656 '
	});
});