/**
 * jquery.freshline.BeforeAfter - jQuery Plugin for Before After Effects Banner Animation (freshline)
 * @version: 1.1 (12.09.2011)
 * @requires jQuery v1.2.2 or later 
 * @author Krisztian Horvath
 * All Rights Reserved, use only in freshline Templates or when Plugin bought at Envato ! 
**/




(function($,undefined){	
	
	
	
	////////////////////////////
	// THE PLUGIN STARTS HERE //
	////////////////////////////
	
	$.fn.extend({
	
		
		// OUR PLUGIN HERE :)
		frames_slider: function(options) {
	
		
			
		////////////////////////////////
		// SET DEFAULT VALUES OF ITEM //
		////////////////////////////////
		var defaults = {	
			width: 876, // width of banner
			height: 300, // height of banner						
			theme:"none",	//none,sport,elegant,wood,custom
			timer:2000,
			hidetoolbar:0
		};
		
		var options = $.extend({}, $.fn.frames_slider.defaults, options);
		

		return this.each(function() {
		
			// An Array to preload all the images
			var ba_images = new Array;
			
			//Keep track of the ba_images that are loaded
			var ba_imagesLoaded = 0;
			
			//PUT THE BANNER HOLDER IN A VARIABLE
			var bannerTop = $(this);
			
			bannerTop.css({'display':'none'});
			
			
			// OPTIONS 
			var opt=options;
			opt.ie = ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 );
			if (opt.timer==undefined) opt.timer=2000;
			if (opt.hidetoolbar==undefined) opt.hidetoolbar=0;
			
			// Set Some Data in the Object
			bannerTop.data('off',parseInt(bannerTop.css('padding-top'),0));								
			bannerTop.data('ba_imagesLoaded',0);
			var currentSlide = bannerTop.find("li").first();	
			bannerTop.data('currentSlide',currentSlide);
			
			//Init the Mask
			initMask(bannerTop,opt);
						
			

			//create the Before & After Images
			prepareImages(bannerTop);
			
			var mainloader=$("<div id='mainloader' class='loader'></div>");									
			bannerTop.append(mainloader);
			
			//turn off all slides, to make sure nothing pops up without our controll....
			bannerTop.find('ul').css({'display':'none'});
			bannerTop.find('ul li').css({'display':'none'});			
			startBanner(bannerTop,opt);
			
			setTheme(bannerTop,opt);
		
			
			
			// Init Image Preloading 
			initImagePreLoading(bannerTop);
			
			//NOW WE LOAD THE ba_images, AND ONCE IT HAS BEED DONE, WE CAN START
			preloadba_images(bannerTop,opt);
		
			bannerTop.hover(function() {
								var $this=$(this);
								$this.data('mouseOver','0');
								$this.data('hideT',0);
								$this.find('#toolbox').stop(true,true);
								if ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 ) {
									$this.find('#toolbox').css({'display':'block'});
								} else {
									$this.find('#toolbox').animate({'opacity':'1.0'},{duration:100});
								}
								if (opt.ie)
									var pa=$('<div id="fh_pause" class="pause_sign" style="left:'+(opt.width+opt.pl-45)+'px;top:'+(opt.pt+10)+'px"></div>');
								else
									var pa=$('<div id="fh_pause" class="pause_sign" style="opacity:0.0;left:'+(opt.width+opt.pl-55)+'px;top:'+(opt.pt+10)+'px"></div>');
								$this.append(pa);
								if (!opt.ie) pa.animate({'opacity':'1.0','left':(opt.width+opt.pl-45)+'px'},{duration:300});
								
								
							},
							function() {
								var $this=$(this);
								$this.data('mouseOver','1');
								$this.data('hideT',0);
								$this.find('#fh_pause').remove();
							});
							
			
			bannerTop.data('hideT',0);
			
			if (opt.hidetoolbar!=0) {
					setInterval(function() {
					 if (bannerTop.data('loaded')=="true") {
							if (bannerTop.data('mouseOver')!='0') bannerTop.data('hideT',(bannerTop.data('hideT')+100));
							if (bannerTop.data('hideT')>=opt.hidetoolbar) {												
								if ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 ) {
									bannerTop.find('#toolbox').css({'display':'none'});
								} else {
									bannerTop.find('#toolbox').animate({'opacity':'0.0'},{duration:400});
								}
							}
						}
					},100);
			}
			
			
			setInterval(function() {
									  if (bannerTop.data('loaded')=="true") {
											bannerTop.find('#cd').each(function() {
											 
												var $this = $(this);
											    if ($this.data('idNum') == bannerTop.data('currentSlide').index()) {
														
														
														if (opt.timer!=0) {
																if ($this.data('t')==undefined) $this.data('t',0);
																var actMT = $this.data('t');																						
																$this.css({'background-position':'0px '+(actMT-10)+'px'});
																// IF TIME IS UP, WE NEED TO SWAP :)
																if (actMT<=-1000) {																								
																	var newId = bannerTop.data('currentSlide').index();																																							
																	newId++;													
																	if (newId==bannerTop.data('currentSlide').parent().find("li").size()) newId=0;
																	if (newId==-1) newId=bannerTop.data('currentSlide').parent().find("li").size()-1;												
																	actMT=0;																	
																	var newcurrentSlide = bannerTop.find("li").each(
																			function(i) {				
																				$this=$(this);																		
																				if (i == newId) {																					
																					swapBanner(bannerTop.data('currentSlide'),$this,bannerTop,opt);
																				}
																			});																	
																}
																// Move the Image 10 Pixel to the top :) Animation Frames...
																if (bannerTop.data('mouseOver')!='0') $this.data('t',actMT-10);
														} else {
														 
														}
												}
											});
										  }
										},(opt.timer/100));
			
				
			
			
			
			
		})
	}
})
		

		///////////////////////////////
		//  --  LOCALE FUNCTIONS -- //
		///////////////////////////////
		
					//////////////////////
					// RESET OPT VALUES //
					//////////////////////
					function setOptions(opt,bannerTop) {
						opt.pt = parseInt(bannerTop.css('padding-top'),0);
						opt.pl = parseInt(bannerTop.css('padding-left'),0);
						opt.pr = parseInt(bannerTop.css('padding-right'),0);
						opt.pb = parseInt(bannerTop.css('padding-bottom'),0);
						
						// SET DEFAULT SIZES, PADDINGS, ETC.
						opt.l = opt.pl/2;
						opt.t = opt.pt/2;
						opt.r = opt.pl + opt.width + opt.pr/2;
						opt.b = opt.pt + opt.height + opt.pb/2;						
					}
					
					
					
					////////////////////////////////
					// SET THEME DEPENDEND ASSETS //
					////////////////////////////////
					function setTheme(bannerTop,opt) {
						
						

						if (opt.theme=="none") {
						}
			

				//////////////////
				// CUSTOM THEME //
				//////////////////
						
						if (opt.theme=="custom") {
							// SET THE SPORT THEME 
							bannerTop.addClass("custom_frame_basic");
							bannerTop.addClass("custom_frame_bg");
							setOptions(opt,bannerTop);
																				
							bannerTop.append('<div id="screw_lt" class="custom_topleftscrew" style="top:'+opt.t+'px;left:'+opt.l+'px"></div>');
							bannerTop.append('<div id="screw_rt" class="custom_toprightscrew" style="top:'+opt.t+'px;left:'+opt.r+'px"></div>');
							bannerTop.append('<div id="screw_lb" class="custom_bottomleftscrew" style="top:'+opt.b+'px;left:'+opt.l+'px"></div>');
							bannerTop.append('<div id="screw_rb" class="custom_bottomrightscrew" style="top:'+opt.b+'px;left:'+opt.r+'px"></div>');
							
							// Changing the ToolBox Settings
							bannerTop.find('#toolbox').addClass('custom_toolbox');
							bannerTop.find('#cd').addClass('custom_countdown');
							bannerTop.find('#mini_divider').addClass('custom_mini_divider');
							bannerTop.find('#previous').addClass('custom_previous');
							bannerTop.find('#next').addClass('custom_next');			
							bannerTop.find('#mask').addClass('custom_mask');							
							bannerTop.find('.mini_thumbnail_buttons').each(function(i) {
								var $this=$(this);
								
								$this.addClass('custom_mini_thumbnail_buttons');
							});
							
							// ADD GLAS EFFECT ON THE BANNER
							bannerTop.append('<div id="frame_innershadow" class="frame_custom_innershadow" style="top:'+(2*opt.t)+'px;z-index:1002;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							bannerTop.append('<div id="reflection" class="frame_custom_reflection" style="top:'+(2*opt.t)+'px;z-index:1005;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							if (bannerTop.find('#creative_layer_holder').size()==0) bannerTop.append('<div id="creative_layer_holder" class="creative_layer"  style="z-index:1007;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
						} else {
						
						
				///////////////////
				// SPORT THEME //
				///////////////////
						if (opt.theme=="sport") {
							// SET THE SPORT THEME 
							bannerTop.addClass("sport_frame_basic");
							bannerTop.addClass("sport_frame_bg");
							setOptions(opt,bannerTop);
							
							// SET DEFAULT SIZES, PADDINGS, ETC.							
							opt.r=-8+opt.r;
							opt.b=-8+opt.b;
							
							opt.m = 2*opt.l+opt.width/2;
							opt.w=290;
							opt.off= opt.m-145;
							if (opt.off<2*opt.l) {
								opt.off = 2*opt.l;
								opt.w=opt.r-opt.pr/2-opt.off;
							}
							opt.e=opt.r+opt.pr/2;
							
						/*	if (!opt.ie) {
								// ADD A GRADIENT FADING ON THE BOTTOM
								bannerTop.append('<div id="gradframe" class="sport_frame_basic" style="position:absolute;top:0px;left:0px;overflow:hidden;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
								
								for (var i=0;i<opt.height;i++) {
									bannerTop.find('#gradframe').append('<div class="sport_gradient" style="opacity:'+(i/(opt.height*2))+';position:absolute;top:'+(opt.pt+opt.pb+i)+'px;left:0px;height:1px;width:'+(2*opt.r+2*opt.l+opt.width)+'px"></div>');
								}
							}*/
							bannerTop.append('<div id="top_decor" class="sport_decor" style="top:0px;left:'+opt.off+'px;width:'+opt.w+'px"></div>');
							bannerTop.append('<div id="right_decor" class="sport_right_decor_button" style="top:'+(2*opt.t)+'px;left:'+(5+opt.e)+'px"></div>');
							bannerTop.append('<div id="screw_lt" class="sport_topscrew" style="top:'+opt.t+'px;left:'+opt.l+'px"></div>');
							bannerTop.append('<div id="screw_rt" class="sport_topscrew" style="top:'+opt.t+'px;left:'+opt.r+'px"></div>');
							bannerTop.append('<div id="screw_lb" class="sport_bottomscrew" style="top:'+opt.b+'px;left:'+opt.l+'px"></div>');
							bannerTop.append('<div id="screw_rb" class="sport_bottomscrew" style="top:'+opt.b+'px;left:'+opt.r+'px"></div>');
							
							// Changing the ToolBox Settings
							var tb=bannerTop.find('#toolbox');
							tb.addClass('sport_toolbox');
							bannerTop.find('#cd').addClass('sport_countdown');
							bannerTop.find('#mini_divider').addClass('sport_mini_divider');
							bannerTop.find('#previous').addClass('sport_previous');
							bannerTop.find('#next').addClass('sport_next');			
							bannerTop.find('#mask').addClass('sport_mask');							
							bannerTop.find('.mini_thumbnail_buttons').each(function(i) {
								var $this=$(this);
								
								$this.addClass('sport_mini_thumbnail_buttons');
							});
							
							tb.css({'top':opt.height-10+'px'});
							
							// ADD GLAS EFFECT ON THE BANNER
							bannerTop.append('<div id="frame_innershadow" class="frame_sport_innershadow" style="top:'+(2*opt.t)+'px;z-index:1002;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							bannerTop.append('<div id="reflection" class="frame_sport_reflection" style="top:'+(2*opt.t)+'px;z-index:1005;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							if (bannerTop.find('#creative_layer_holder').size()==0) bannerTop.append('<div id="creative_layer_holder" class="creative_layer"  style="z-index:1007;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
						} else {
						
						
				///////////////////
				// WEDDING THEME //
				///////////////////
						if (opt.theme=="wedding") {
							// SET THE WEDDING THEME 
							bannerTop.addClass("wedding_frame_basic");
							bannerTop.addClass("wedding_frame_bg");
							setOptions(opt,bannerTop);
							
							// SET DEFAULT SIZES, PADDINGS, ETC.							
							opt.r = -8+opt.r;
							opt.b = opt.pt + opt.height + opt.pb-57;
							
							opt.m = 2*opt.l+opt.width/2;
							opt.w=opt.width;							
							opt.e=opt.r+opt.pr/2;
							opt.off=opt.tl;//0;// opt.m-145;																		
							
							bannerTop.append('<div id="top_decor" class="wedding_decor_top" style="top:'+(opt.pt/2 - 24)+'px;left:'+opt.off+'px;width:'+opt.w+'px"></div>');
							bannerTop.append('<div id="bottom_decor" class="wedding_decor_top" style="top:'+opt.b+'px;left:'+opt.off+'px;width:'+opt.w+'px"></div>');														
							
							// ADD GLAS EFFECT ON THE BANNER
							bannerTop.append('<div id="frame_innershadow" class="frame_wedding_innershadow" style="top:'+(2*opt.t)+'px;z-index:1002;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							bannerTop.append('<div id="reflection" class="frame_wedding_reflection" style="top:'+(2*opt.t)+'px;z-index:1005;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							if (bannerTop.find('#creative_layer_holder').size()==0)  bannerTop.append('<div id="creative_layer_holder" class="creative_layer" style="z-index:1007;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							bannerTop.append('<div id="fineborder" class="wedding_fine_border" style="top:'+((2*opt.t)-5)+'px;left:'+((2*opt.l)-5)+'px;z-index:1005;width:'+(opt.width+8)+'px;height:'+(opt.height+8)+'px;"></div>');
							
							// Changing the ToolBox Settings
							var tb=bannerTop.find('#toolbox');
							tb.addClass('wedding_toolbox');
							
							bannerTop.find('#cd').addClass('wedding_countdown');
							bannerTop.find('#mini_divider').addClass('wedding_mini_divider');
							bannerTop.find('#previous').addClass('wedding_previous');
							bannerTop.find('#next').addClass('wedding_next');							
							bannerTop.find('.mini_thumbnail_buttons').each(function(i) {
								var $this=$(this);
								
								$this.addClass('wedding_mini_thumbnail_buttons');
							});
							
							tb.css({'top':opt.height+10+'px'});
						} else {
						
						
				///////////////////
				// FASHION THEME //
				///////////////////
						if (opt.theme=="fashion") {
							// SET THE WEDDING THEME 
							bannerTop.addClass("fashion_frame_basic");
							bannerTop.addClass("fashion_frame_bg");
							setOptions(opt,bannerTop);
							
							// SET DEFAULT SIZES, PADDINGS, ETC.
							opt.r = opt.r-8;
							opt.b = opt.pt + opt.height + opt.pb-57;
							opt.m = 2*opt.l+opt.width/2;
							opt.w=opt.width+(2*opt.l)+opt.pr+26;							
							opt.e=opt.r+opt.pr/2;
							var h=35;//bannerTop.find('#toolbox').height();
							
							var tt=2*opt.t+opt.height;
												
							/*if (!opt.ie) {												
									// ADD A GRADIENT FADING ON THE BOTTOM
									bannerTop.append('<div id="gradframe" class="fashion_frame_basic" style="position:absolute;top:0px;left:0px;overflow:hidden;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
									var maxxh = opt.height+opt.pt+opt.pb;
									
									for (var i=0;i<maxxh/2;i++) {
										bannerTop.find('#gradframe').append('<div class="fashion_gradient" style="opacity:'+(1-i/(maxxh/2))+';position:absolute;top:'+i+'px;left:0px;height:1px;width:'+(2*opt.r+2*opt.l+opt.width)+'px"></div>');
									}
									
									for (var i=0;i<maxxh/2;i++) {
										bannerTop.find('#gradframe').append('<div class="fashion_gradient" style="opacity:'+(i/(maxxh/2))+';position:absolute;top:'+(i+maxxh/2)+'px;left:0px;height:1px;width:'+(2*opt.r+2*opt.l+opt.width)+'px"></div>');
									}
									
							}*/
							
							bannerTop.append('<div id="toolbox2" class="fashion_toolbox_background" style="top:'+tt+'px;height:'+h+'px;left:'+(0-13)+'px;width:'+opt.w+'px"></div>');																
							bannerTop.append('<div id="toolbox_turnback_left" class="fashion_toolbox_background_turnback_left" style="top:'+(tt-6)+'px;left:'+(0-13)+'px"></div>');																
							bannerTop.append('<div id="toolbox_turnback_right" class="fashion_toolbox_background_turnback_right" style="top:'+(tt-6)+'px;left:'+(opt.w-26)+'px"></div>');																							
							
							
							// Changing the ToolBox Settings
							bannerTop.find('#toolbox').addClass('fashion_toolbox');							
							bannerTop.find('#cd').addClass('fashion_countdown');
							bannerTop.find('#mini_divider').addClass('fashion_mini_divider');
							bannerTop.find('#previous').addClass('fashion_previous');
							bannerTop.find('#next').addClass('fashion_next');							
							bannerTop.find('.mini_thumbnail_buttons').each(function(i) {
								var $this=$(this);
								
								$this.addClass('fashion_mini_thumbnail_buttons');
							});
							bannerTop.find('#toolbox').css({'top':(tt-15)+'px'});
							
							// ADD GLAS EFFECT ON THE BANNER
							bannerTop.append('<div id="frame_innershadow" class="frame_fashion_innershadow" style="top:'+(2*opt.t)+'px;z-index:1002;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							bannerTop.append('<div id="reflection" class="frame_fashion_reflection" style="top:'+(2*opt.t)+'px;z-index:1005;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
							if (bannerTop.find('#creative_layer_holder').size()==0) bannerTop.append('<div id="creative_layer_holder" class="creative_layer" style="z-index:1007;position:absolute;width:'+opt.width+'px;height:'+opt.height+'px"></div>');
						}}}}
						
						var cl = bannerTop.find("#creative_layer_holder");
						cl.css({'position':'absolute','margin-top':opt.pt+'px','margin-left':opt.pl+'px'});
						
						
					}
		
					/////////////////////////////////////////////////////////
					// PUT ALL ba_images IN AN ARRAY, FOR PRELOADING !!  //
					///////////////////////////////////////////////////////
					function initImagePreLoading(item) {
								var ba_images=new Array();
								var imageamounts=0;
								item.find("ul li img").each(
									function(i){
										var $this=$(this);
										

										ba_images[imageamounts] = $this.attr('src');								
										imageamounts++;
									});
						
							
							item.data('ba_images',ba_images);
							
					}
		
		
					/////////////////////////////////////////////////////////////////////////////////////////	
					//REKURSIVE PRELOADING ALL THE ba_images, AND CALL THE CALLBACK FUNCTION AT THE END   //
					////////////////////////////////////////////////////////////////////////////////////////
					function preloadba_images(item,opt){	
										
										var ba_images = item.data('ba_images');
										var ba_imagesLoaded = item.data('ba_imagesLoaded');
										var img = new Image();	// TEMPORARY HOLDER FOR IMAGE TO LOAD				
										$(img).css("display","none");
										$(img).attr('src',ba_images[ba_imagesLoaded]);	// SET THE SOURCE OF THE TEMP IMAGE
										
										if (img.complete || img.readyState === 4) {		// CHECK IF THE IMAGE IS ALREADY LOADED
											ba_imagesLoaded++;								// IF YES WE CAN INCREASE THE AMOUNT OF LOADED ba_images
											if(ba_imagesLoaded == ba_images.length) {			// IF WE LOADED ALL THE ba_images	
												item.data('loaded',"true");
												startRotation(item,opt)					// CAN CALLBACK FUNCION BE CALLED
											} else {		
												item.data('ba_imagesLoaded',ba_imagesLoaded);
												preloadba_images(item,opt);				// OTHER WAY WE NEED TO PRELOAD THE REST ba_images
											}
										} else {
											
											$(img).load(function(){						// IF NOT CACHED YET, LETS LOAD THE IMAGE
													ba_imagesLoaded++;						// WE CAN INCREASE THE AMOUNT OF LOADED ba_images
													if(ba_imagesLoaded == ba_images.length) {	// IF WE LOADED ALL THE ba_images									
														item.data('loaded',"true");													
														startRotation(item,opt);						// CAN CALLBACK FUNCION BE CALLED		
													} else {		
														item.data('ba_imagesLoaded',ba_imagesLoaded);													
														preloadba_images(item,opt);		// OTHER WAY WE NEED TO PRELOAD THE REST ba_images
													}
											});
										}
								}; 
		
		
					
		
					////////////////////////////////////////////////////
					// CREATE THE BEFORE AFTER IMAGES IN THE DIVS 	  //
					////////////////////////////////////////////////////
					
					function prepareImages(item) {
						
						item.find("li >img").each(
							function(){
							
								var $this=$(this);
								
								// ADD THE ID BEFORE TO THE FIRST IMG IN THE LIST 
								$this.attr({id:'before'});
								
								
									// WRAP THE ALL IN A NEW DIV
									$this.parent().find("#before").wrapAll("<div id='ba_images'></div>");
									
									
									// WRAP EACH BEFORE AND AFTER AS WELL IN A DIV									
									$this.parent().find("#before").wrap("<div id='ext_ext_before'><div id='ext_before'></div></div>");										
									
									

									
									
									var eeb=$this.parent().parent().parent().find("#before").parent().parent();
									var eb=eeb.find("#before").parent();
									var b=eb.find("#before");
									
									
									eeb.css({'position':'absolute','z-index':'1','top':'0px','left':'0px'});
									eb.css({'position':'absolute','z-index':'1','top':'0px','left':'0px'});
									
									
									
								
								
							});
					}
					
					
					//////////////////////////////////
					// Create the Transitions Boxes //
					//////////////////////////////////
						 function addBoxes(slider, Cols,Rows){
							var boxWidth = Math.round(slider.width()/Cols);
							var boxHeight = Math.round(slider.height()/Rows);
							var src = slider.find('#before').attr('src');
							
							for(var rows = 0; rows < Rows; rows++){
								for(var cols = 0; cols < Cols; cols++){
									if(cols == Cols-1){
										slider.append(
											$('<div class="freshbox"></div>').css({ 
												position:'absolute',
												opacity:0,
												left:(boxWidth*cols)+'px', 
												top:(boxHeight*rows)+'px',
												width:(slider.width()-(boxWidth*cols))+'px',
												height:boxHeight+'px',
												background: 'url('+src+') no-repeat -'+ ((boxWidth + (cols * boxWidth)) - boxWidth) +'px -'+ ((boxHeight + (rows * boxHeight)) - boxHeight) +'px'											})
										);
									} else {
										slider.append(
											$('<div class="freshbox"></div>').css({ 
												position:'absolute',
												opacity:0,
												left:(boxWidth*cols)+'px', 
												top:(boxHeight*rows)+'px',
												width:boxWidth+'px',
												height:boxHeight+'px',
												background: 'url('+src+') no-repeat -'+ ((boxWidth + (cols * boxWidth)) - boxWidth) +'px -'+ ((boxHeight + (rows * boxHeight)) - boxHeight) +'px'
											})
										);
									}
								}
							}
						}
					

					///////////////////
					// Create Clones //
					///////////////////
					
						 function repeatMe(slider,amount){
							
							for(var i = 0; i < amount; i++){								
								var src = slider.find('#before').attr('src');								
									slider.append(
										$('<div class="freshslice"></div>').css({ 
											left:'0px',
											position:'absolute',
											height:slider.height()+'px', 
											width:slider.width()+'px',
											opacity:'0', 											
											background: 'url('+ src +') no-repeat'
										})										
									);
								
								
							}
						  }

					
					/////////////////////////
					// Create the Slices 2//
					////////////////////////
					
						 function addHSlices(slider,amount){
							//alert(amount);
							for(var i = 0; i < amount; i++){
								var sliceHeight = Math.round(slider.height()/amount);
								var src = slider.find('#before').attr('src');
								if(i == amount-1){
									slider.append(
										$('<div class="freshslice"></div>').css({ 
											top:(sliceHeight*(i))+'px', 
											height:(slider.height()-(sliceHeight*i))+'px',
											position:'absolute',
											width:slider.width()+'px', 
											opacity:'0', 											
											background: 'url('+ src +') no-repeat -0px '+ (0-((i * sliceHeight))) +"px"
										})
										
									);
									
								} else {
									slider.append(
										$('<div class="freshslice"></div>').css({ 
											top:(sliceHeight*(i))+'px', 
											height:sliceHeight+'px',
											position:'absolute',
											width:slider.width()+'px', 
											opacity:'0', 
											background: 'url('+  src +') no-repeat -0px '+ (0-((i * sliceHeight)) ) +"px"
										})
									);
								
								}
							}
						}
						


					
					
					///////////////////////
					// Create the Slices //
					//////////////////////
					
						 function addSlices(slider,amount){
							//alert(amount);
							for(var i = 0; i < amount; i++){
								var sliceWidth = Math.round(slider.width()/amount);
								var src = slider.find('#before').attr('src');
								if(i == amount-1){
									slider.append(
										$('<div class="freshslice"></div>').css({ 
											left:(sliceWidth*i)+'px', width:(slider.width()-(sliceWidth*i))+'px',
											position:'absolute',
											height:'0px', 
											opacity:'0', 											
											background: 'url('+ src +') no-repeat -'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px 0%'
										})
									);
									
								} else {
									slider.append(
										$('<div class="freshslice"></div>').css({ 
											left:(sliceWidth*i)+'px', width:sliceWidth+'px',
											position:'absolute',
											height:'0px', 
											opacity:'0', 
											background: 'url('+  src +') no-repeat -'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px 0%'
										})
									);
									//alert('url('+  src +') no-repeat -'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px 0%');
								}
							}
						}
						
						
						
						
					/////////////////////
					// KILL ANIMATIONS //
					////////////////////
					function killAnims() {							
							var item=$(this).parent();							
							item.find('#before').css({'opacity':'1'});
							item.find('.freshslice').each(function(a) { var $this=$(this); $this.remove();})
							item.find('.freshsbox').each(function(a) { var $this=$(this); $this.remove();})
							
							//item.animate({'left':'0px','top':'0px','opacity':'1.0'},{duration:10,queue:false});										
					}
						
						
						
						
						
					////////////////////////////////////////////////////
					// - THE BANNER SWAPPER, ONE AGAINST THE OTHER :) //
					////////////////////////////////////////////////////
					function swapBanner(item,newitem,bannerTop,opt) {
											
							var trans=false;
							
							// PUT THE TEXT ANIMS BACK TO THE ORIGINAL PLACE.... HOLDER...
							bannerTop.find('#creative_layer_holder div').each(function(i) {
									var $this = $(this);									
									var oldParent= $this.data('parent');									
									$this.appendTo(oldParent);
									
								});
							
							// SET TOP INDEX AND START OPOCITY, IF IE8 EVEN NO FILTER 
							bannerTop.find('li').each(function(i) {
								var $this=$(this);
								if ($this.index() != item.index() && $this.index() !=newitem.index()) {
									$this.css({'z-index':'950','opacity':'0.0'});
									if  ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 ) 
									  $this.addClass('noFilterClass');
								}
							 });
							
							item.css({'z-index':'995'});							
							newitem.css({'z-index':'1000'});
							
							// SET POSITION AND ORIGINAL WIDTH AND HEIGHT OF THE ITEM AND NEWITEM
							if (item.data('orgWidth')==undefined) {
												item.data('orgWidth',item.find('#before').width());
												item.find('#before').data('orgWidth',item.data('orgWidth'));
											}
							if (item.data('orgHeight')==undefined) {
												item.data('orgHeight',item.find('#before').height());
												item.find('#before').data('orgHeight',item.data('orgHeight'));
											}
							if (newitem.data('orgWidth')==undefined) {
												newitem.data('orgWidth',newitem.find('#before').width());
												newitem.find('#before').data('orgWidth',newitem.data('orgWidth'));
											}
							if (newitem.data('orgHeight')==undefined) {
												newitem.data('orgHeight',newitem.find('#before').height());
												newitem.find('#before').data('orgHeight',newitem.data('orgHeight'));
											}
							
							
							//Change Mask on the top 														
							var toppos = opt.pt + opt.height/2 - newitem.data('orgHeight')/2; 
							var leftpos = opt.pl + opt.width/2 - newitem.data('orgWidth')/2; 	
							var stageWidth = newitem.data('orgWidth');
							var stageHeight = newitem.data('orgHeight');
							if (stageWidth>opt.width) stageWidth=opt.width;
							if (stageHeight>opt.height) stageHeight=opt.height;
							if (toppos<opt.pt) toppos=opt.pt;
							if (leftpos<opt.pl) leftpos=opt.pl;
							bannerTop.find('#mask:first').css({'top':toppos+'px','left':leftpos+'px','width':stageWidth+'px','height':stageHeight+'px'});
							
							
							// RESET SOME SETTINGS							
							item.find('#before').css({'width':item.data('orgWidth')+'px','height':item.data('orgHeight')+'px'});
							newitem.find('#before').css({'width':newitem.data('orgWidth')+'px','height':newitem.data('orgHeight')+'px'});
							item.css({'width':opt.width+'px','height':opt.height+'px'});
							newitem.css({'width':opt.width+'px','height':opt.height+'px'});
							item.find('#before').stop(true,true);
							newitem.find('#before').stop(true,true);
							
							//STOP ANIMATION, KILL UNUSED PARTS
							newitem.stop(true,true);							
							newitem.find('.freshslice').each(function(a) { var $this=$(this); $this.remove();})
							newitem.find('.freshbox').each(function(a) { var $this=$(this); $this.remove();})
							
							
					// IF NOT IE8, THAN WE CAN USE DIFFERENT ANIMATIONS //
					if  (!($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 ) ) {
							
										////////////////////
										// GRADIENT FADE  //
										////////////////////
												if (newitem.data('transition') == "gradientfade" || newitem.data('transition') == "1") {
													trans=true;
													addSlices(newitem,newitem.width()/5);
													//alert(newitem.html());
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:0,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});								
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);																		
															
															$this.css({'height':newitem.height()+'px','top':'0px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i).animate({'opacity':'1.0'},{duration:(i*30)+(40),queue:true,  complete:killAnims});
														else
															$this.delay(i).animate({'opacity':'1.0'},{duration:(i*20)+(40),queue:true});
														
													});
											
												}

										
										
										////////////////////
										// GRADIENT FADE 2 //
										////////////////////
												if (newitem.data('transition') == "gradientfade2" || newitem.data('transition') == "2") {
													trans=true;
													addHSlices(newitem,newitem.height()/5);
													//alert(newitem.html());
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:0,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});								
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);																		
															
															$this.css({'width':newitem.width()+'px','left':'0px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i).animate({'opacity':'1.0'},{duration:(i*40)+(100),queue:true, ease:'linear', complete:killAnims});
														else
															$this.delay(i).animate({'opacity':'1.0'},{duration:(i*30)+(100),queue:true,ease:'linear'});
														
													});
											
												}							
												
												
												
										/////////////////////
										// BOX RANDOM FADE //
										////////////////////
												if (newitem.data('transition') == "box-randomfade" || newitem.data('transition') == "3") {
													trans=true;
													addBoxes(newitem,opt.width/80,opt.height/80);
													//alert(newitem.html());
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													var delays=[];
													newitem.find('.freshbox').each(function(i){ delays[i]=i});
													for (var dd=0;dd<delays.length;dd++) {
														var newI=Math.round(Math.random()*delays.length);
														var old=delays[newI];
														delays[newI]=delays[dd];
														delays[dd]=old;
													}
													newitem.find('.freshbox').each(function(i){
														var $this=$(this);									
															
															
															
														if (i==newitem.find('.freshbox').size()-1)
															$this.delay((i*15)+150).animate({'opacity':'1.0'},{duration:Math.random()*1000+300,ease:'linear',queue:true, complete:killAnims});
														else
															$this.delay((delays[i]*12)+120).animate({'opacity':'1.0'},{duration:Math.random()*1000+300,ease:'linear',queue:true});
														
													});						
												}
										
										
										/////////////////////
										// BOX RANDOM ZOOM //
										////////////////////
												if (newitem.data('transition') == "box-randomzoom" || newitem.data('transition') == "4") {
													trans=true;
													addBoxes(newitem,opt.width/80,opt.height/80);
													//alert(newitem.html());
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													var delays=[];
													newitem.find('.freshbox').each(function(i){ delays[i]=i});
													for (var dd=0;dd<delays.length;dd++) {
														var newI=Math.round(Math.random()*delays.length);
														var old=delays[newI];
														delays[newI]=delays[dd];
														delays[dd]=old;
													}													
													newitem.find('.freshbox').each(function(i){
														var $this=$(this);									
														
														var tw=$this.width();
															var th=$this.height();
															
															var tw=$this.width();
															var th=$this.height();
															
															$this.css({'width':"0px", 'height':'0px','opacity':'1.0',
																		'-webkit-border-radius':'5px',
																		'-moz-border-radius': '5px',
																		'border-radius': '5px'});	
															
														if (i==newitem.find('.freshbox').size()-1)
																$this.delay((i*30)+170).animate({'width':(tw+10)+'px','height':(th+10)+'px'},{duration:250,ease:'linear',queue:true, complete:killAnims});
															else
																$this.delay((delays[i]*28)+120).animate({'width':(10+tw)+'px','height':(th+10)+'px'},{duration:250,ease:'linear',queue:true});																		
													});						
												}
												
												
												
										///////////////////////////
										// BOX BIG DIAGONAL ZOOM //
										//////////////////////////
												if (newitem.data('transition') == "box-diagonalzoom" || newitem.data('transition') == "5") {
													trans=true;
													addBoxes(newitem,opt.width/80,opt.height/80);
													
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0.0'});
													var lastrow=false;
													var act=1;
													var actrow=0;
													var was=1;
													var col=Math.round(opt.width/80);
													var row=Math.round(opt.height/80);		
													var max=newitem.find('.freshbox').size();								
													
													for (var i=0;i<max;i++) {
															var $this = newitem.find('.freshbox:eq('+(act-1)+')');													
																if ((act-(col-1))>actrow*col) {
																		act=act-(col-1); 
																 } else {															
																		act=was;
																		act=act+col;												
																		was=act;																									
																}							
															if (act-(col*(actrow+1))==0) actrow++;
															if (act>max) {
																lastrow=true;
																act=was-col+1;
																was=act;											
															}
																									
															
															var tw=$this.width();
															var th=$this.height();
															
															$this.css({'width':"0px", 'height':'0px','opacity':'1.0',
																		'-webkit-border-radius':'5px',
																		'-moz-border-radius': '5px',
																		'border-radius': '5px'});
															
																
															if (i==newitem.find('.freshbox').size()-1)
																$this.delay(i*30).animate({'width':(tw+10)+'px','height':(th+10)+'px'},{duration:660,ease:'linear',queue:true, complete:killAnims});
															else
																$this.delay(i*30).animate({'width':(10+tw)+'px','height':(th+10)+'px'},{duration:660,ease:'linear',queue:true});																		
													}
												}
												
												
												
												
										///////////////////////////////////////
										// BOX BIG DIAGONAL FADE TRANSITION //
										/////////////////////////////////////
												if (newitem.data('transition') == "box-diagonalfade" || newitem.data('transition') == "6") {
													trans=true;
													addBoxes(newitem,opt.width/80,opt.height/80);
													
													//item.delay(200).animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:true});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0.0'});
													var lastrow=false;
													var act=1;
													var actrow=0;
													var was=1;
													var col=Math.round(opt.width/80);
													var row=Math.round(opt.height/80);		
													var max=newitem.find('.freshbox').size();								
													
													for (var i=0;i<max;i++) {
															var $this = newitem.find('.freshbox:eq('+(act-1)+')');													
																if ((act-(col-1))>actrow*col) {
																		act=act-(col-1); 
																 } else {															
																		act=was;
																		act=act+col;												
																		was=act;																									
																}							
															if (act-(col*(actrow+1))==0) actrow++;
															if (act>max) {
																lastrow=true;
																act=was-col+1;
																was=act;											
															}
																									
															
															var tw=$this.width();
															var th=$this.height();
															
															$this.css({'opacity':'0.0'});
																
															if (i==newitem.find('.freshbox').size()-1)
																$this.delay(i*30).animate({'opacity':'1.0'},{duration:660,ease:'linear',queue:true, complete:killAnims});
															else
																$this.delay(i*30).animate({'opacity':'1.0'},{duration:660,ease:'linear',queue:true});																		
													}
												}
												
												
												
												
												
										///////////////////////////////////
										// BOX BIG LEFT FADE TRANSITION //
										/////////////////////////////////
												if (newitem.data('transition') == "box-leftfade" || newitem.data('transition') == "7") {
													trans=true;
													addBoxes(newitem,opt.width/80,opt.height/80);
													
													//item.delay(200).animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:true});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0.0'});
													var lastrow=false;
													var act=1;
													var actrow=2;
													var was=1;
													var col=Math.round(opt.width/80);
													var row=Math.round(opt.height/80);		
													var max=newitem.find('.freshbox').size();								
													
													for (var i=0;i<max;i++) {
															var $this = newitem.find('.freshbox:eq('+(act-1)+')');													
															act=act+col;	
															if (act>max) {
																act = actrow;
																actrow++;
															}
															
															$this.css({'opacity':'0.0'});
																
															if (i==newitem.find('.freshbox').size()-1)
																$this.delay(i*30).animate({'opacity':'1.0'},{duration:660,ease:'linear',queue:true, complete:killAnims});
															else
																$this.delay(i*30).animate({'opacity':'1.0'},{duration:660,ease:'linear',queue:true});																		
													}
												}
												
												
												
										///////////////////////////////////
										// BOX BIG LEFT ZOOM TRANSITION //
										/////////////////////////////////
												if (newitem.data('transition') == "box-leftzoom" || newitem.data('transition') == "8") {
													trans=true;
													addBoxes(newitem,opt.width/80,opt.height/80);
													
													//item.delay(200).animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:true});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0.0'});
													var lastrow=false;
													var act=1;
													var actrow=2;
													var was=1;
													var col=Math.round(opt.width/80);
													var row=Math.round(opt.height/80);		
													var max=newitem.find('.freshbox').size();								
													
													for (var i=0;i<max;i++) {
															var $this = newitem.find('.freshbox:eq('+(act-1)+')');													
															act=act+col;	
															if (act>max) {
																act = actrow;
																actrow++;
															}
															
															var tw=$this.width();
															var th=$this.height();
															
															$this.css({'width':"0px", 'height':'0px','opacity':'1.0',
																		'-webkit-border-radius':'5px',
																		'-moz-border-radius': '5px',
																		'border-radius': '5px'});
															
																
															if (i==newitem.find('.freshbox').size()-1)
																$this.delay(i*30).animate({'width':(tw+10)+'px','height':(th+10)+'px'},{duration:660,ease:'linear',queue:true, complete:killAnims});
															else
																$this.delay(i*30).animate({'width':(tw+10)+'px','height':(th+10)+'px'},{duration:660,ease:'linear',queue:true});																		
													}
												}
												
												
										/////////////////////////
										// GHOST TRANSITION //
										/////////////////////////
												if (newitem.data('transition') == "ghost" || newitem.data('transition') == "9") {
													trans=true;
													repeatMe(newitem,3);
													
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);
														var dist=140;														
														if (i==1) dist=80;
														if (i==2) dist=20;
															$this.css({'opacity':'0','top':'0px','left':dist+'px'});
															
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*290).animate({'opacity':'1.0','left':'0px'},{duration:800,queue:true, complete:killAnims});
														else
															$this.delay(i*290).animate({'opacity':'1.0','left':'0px'},{duration:800,queue:true});
														
													});						
												}

										/////////////////////////
										// BLUR TRANSITION //
										/////////////////////////
												if (newitem.data('transition') == "camfocus" || newitem.data('transition') == "10") {
													trans=true;
													repeatMe(newitem,15);
													
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
														
															$this.css({'opacity':'0.0'});
															$this.animate({'opacity':Math.random()*0.7,'top':(Math.random()*20-10)+'px','left':(Math.random()*20-10)+'px'},{duration:600});
															
														if (i==newitem.find('.freshslice').size()-1)
															$this.animate({'opacity':'1.0','left':'0px','top':'0px'},{duration:600,queue:true, complete:killAnims});
														else
															$this.animate({'opacity':'1.0','left':'0px','top':'0px'},{duration:600,queue:true});
														
													});						
												}
												
										/////////////////////////
										// ROLLO2 TRANSITION //
										/////////////////////////
												if (newitem.data('transition') == "rollo2" || newitem.data('transition') == "11") {
													trans=true;
													addHSlices(newitem,5);
													//alert(newitem.html());
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
														
															$this.css({'width':newitem.width()+'px','left':'0px','top':parseInt($this.css('top'),0)+100+'px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*125).animate({'opacity':'1.0','top':(parseInt($this.css('top'),0)-100)+'px'},{duration:310,queue:true, complete:killAnims});
														else
															$this.delay(i*125).animate({'opacity':'1.0','top':(parseInt($this.css('top'),0)-100)+'px'},{duration:310,queue:true});
														
													});						
												}

												
										/////////////////////////
										// CURTAIN2 TRANSITION //
										/////////////////////////
												if (newitem.data('transition') == "curtain2" || newitem.data('transition') == "12") {
													trans=true;
													addSlices(newitem,5);
													//alert(newitem.html());
													//item.animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:1000,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
														
															$this.css({'height':newitem.height()+'px','top':'0px','left':parseInt($this.css('left'),0)+100+'px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*165).animate({'opacity':'1.0','left':(parseInt($this.css('left'),0)-100)+'px'},{duration:260,queue:true, complete:killAnims});
														else
															$this.delay(i*165).animate({'opacity':'1.0','left':(parseInt($this.css('left'),0)-100)+'px'},{duration:260,queue:true});
														
													});						
												}
												
													
										/////////////////////
										// RAIN TRANSITION //
										/////////////////////
												if (newitem.data('transition') == "rain" || newitem.data('transition') == "13") {
													trans=true;
													addSlices(newitem,opt.width/30);
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
															var dist=opt.width/32;
															$this.css({'height':newitem.height()+'px','top':(0-opt.height)+'px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay((i*(80-i))+50).animate({'opacity':'1.0','top':'0px'},{duration:680,queue:true, complete:killAnims});
														else
															$this.delay(Math.random()*(i*(80-i))+50).animate({'opacity':'1.0','top':'0px'},{duration:680,queue:true});
														
													});						
												}
												
												
										//////////////////////////
										// FOUNTAIN TRANSITION //
										/////////////////////////
												if (newitem.data('transition') == "fountain" || newitem.data('transition') == "14") {
													trans=true;
													addSlices(newitem,opt.width/30);
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													var dist=opt.width/30;
													var del=100+(70*dist/2);
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
														
														$this.css({'height':newitem.height()+'px','top':(0-opt.height)+'px'});
														if (i<dist/2) 
															del=del-70;
														else 
															del=del+70;
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(del).animate({'opacity':'1.0','top':'0px'},{duration:690,queue:true, complete:killAnims});
														else
															$this.delay(del).animate({'opacity':'1.0','top':'0px'},{duration:690,queue:true});
														
													});						
												}
												
												
												
										/////////////////////
										// WAVE TRANSITION //
										/////////////////////
												if (newitem.data('transition') == "wave" || newitem.data('transition') == "15") {
													trans=true;
													addSlices(newitem,opt.width/30);
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
															var dist=opt.width/32;
															$this.css({'height':newitem.height()+'px','top':(0-opt.height)+'px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*(90-i)).animate({'opacity':'1.0','top':'0px'},{duration:670,queue:true, complete:killAnims});
														else
															$this.delay(i*(90-i)).animate({'opacity':'1.0','top':'0px'},{duration:670,queue:true});
														
													});						
												}
											
											
											
										///////////////////////
										// ZIPPER TRANSITION //
										///////////////////////
												if (newitem.data('transition') == "zipper" || newitem.data('transition') == "16") {
													trans=true;
													addSlices(newitem,opt.width/30);
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													var par=0;
													newitem.find('.freshslice').each(function(i){									
														var $this=$(this);									
															var dist=opt.width/32;
															if (par==0) {
																$this.css({'height':newitem.height()+'px','top':(0-opt.height)+'px'});
																par=1;
															} else {
																$this.css({'height':newitem.height()+'px','top':(opt.height)+'px'});
																par=0;
															}
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*70).animate({'opacity':'1.0','top':'0px'},{duration:560,easing:'easeOutSine',queue:true, complete:killAnims});
														else
															$this.delay(i*70).animate({'opacity':'1.0','top':'0px'},{duration:560,easing:'easeOutSine',queue:true});
														
													});						
												}							
												
												
										////////////////////////
										// CURTAIN TRANSITION //
										////////////////////////
												if (newitem.data('transition') == "curtain" || newitem.data('transition') == "17") {
													trans=true;
													addSlices(newitem,opt.width/30);
													//alert(newitem.html());
													//item.delay(1500).animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:500,queue:true});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
															var dist=opt.width/30;
															$this.css({'height':newitem.height()+'px','top':'0px','left':parseInt($this.css('left'),0)+dist+'px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*(80-i)).animate({'opacity':'1.0','left':(parseInt($this.css('left'),0)-dist)+'px'},{duration:610,queue:true, complete:killAnims});
														else
															$this.delay(i*(80-i)).animate({'opacity':'1.0','left':(parseInt($this.css('left'),0)-dist)+'px'},{duration:610,queue:true});
														
													});						
												}
												
												
										
										////////////////////////
										// ROLLO TRANSITION //
										////////////////////////
												if (newitem.data('transition') == "rollo" || newitem.data('transition') == "18") {
													trans=true;
													addHSlices(newitem,opt.height/30);
													//alert(newitem.html());
													//item.delay(1500).animate({'left':'0px','top':'0px','opacity':'0.0'},{duration:500,queue:true});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('.freshslice').each(function(i){
														var $this=$(this);									
															var dist=opt.height/30;
															$this.css({'width':newitem.width()+'px','left':'0px','top':parseInt($this.css('top'),0)+dist+'px'});
														
														if (i==newitem.find('.freshslice').size()-1)
															$this.delay(i*(80-i)).animate({'opacity':'1.0','top':(parseInt($this.css('top'),0)-dist)+'px'},{duration:610,queue:true, complete:killAnims});
														else
															$this.delay(i*(80-i)).animate({'opacity':'1.0','top':(parseInt($this.css('top'),0)-dist)+'px'},{duration:610,queue:true});
														
													});						
												}
										
										////////////
										// ZOOMME //
										////////////
												if (newitem.data('transition') == "zoomme" || newitem.data('transition') == "19") {
													trans=true;
													item.css({'z-index':'1000'});							
													newitem.css({'z-index':'995'});	
													item.stop(true,true);
													newitem.stop(true,true);
													item.find('#before').css({'width':item.data('orgWidth')+'px','height':item.data('orgHeight')+'px'});
													newitem.find('#before').css({'width':newitem.data('orgWidth')+'px','height':newitem.data('orgHeight')+'px'});
													item.animate({'width':(2*opt.width)+'px','height':(2*opt.height)+'px','left':0-opt.width/2+'px','top':0-opt.height/2+'px','opacity':'0.0'},{duration:800,queue:false});
													item.find('#before').animate({'width':(2*opt.width)+'px','height':(2*opt.height)+'px'},{duration:800,queue:false});
													newitem.css({'position':'absolute','top':'0px','left':'0px','opacity':'1.0'});
													newitem.find('#before').css({'opacity':'0'});
													newitem.find('#before').animate({'opacity':'1.0'},{duration:600});
												}
							
					}	
							
							
							
					//////////////////////////
					// UP - DOWN TRANSITION //
					//////////////////////////
							if (newitem.data('transition') == 'slide-updown' || newitem.data('transition') == "20") {
										trans=true;
										var left=true;
										bannerTop.find('li').each(function () {
											$this=$(this);
											if ($this.index() != item.index() && $this.index()!=newitem.index())
												$this.css({'opacity':0.0});
										});
										if (item.index()>newitem.index()) left = false;
										if (item.index()==0 && newitem.index()!=1) left=false;										
										
										
										if (item.index()==(item.parent().find("li").size()-1) && newitem.index()==0) left=true;
											
										
										
										if (left) {
											item.animate({'top':0-opt.height},{duration:650,queue:false});
											newitem.css({'opacity':'1.0','position':'absolute','top':opt.height,'left':'0px','width':opt.width, 'height':opt.height});
											newitem.animate({'left':'0px','top':'0px','opacity':'1.0'},{duration:650,queue:false});
											
										} else  {
											item.animate({'top':opt.height},{duration:650,queue:false});
											newitem.css({'opacity':'1.0','position':'absolute','top':0-opt.height+'px','left':'0px','width':opt.width, 'height':opt.height});						
											newitem.animate({'left':'0px','top':'0px','opacity':'1.0'},{duration:650,queue:false});
										}
							}
							
							
							
					/////////////////////////////
					// LEFT - RIGHT TRANSITION //
					/////////////////////////////
							if (trans==false) {
									var left=true;
									bannerTop.find('li').each(function () {
										$this=$(this);
										if ($this.index() != item.index() && $this.index()!=newitem.index())
											$this.css({'opacity':0.0});
									});
									if (item.index()>newitem.index()) left = false;
									if (item.index()==0 && newitem.index()!=1) left=false;										
									
									
									if (item.index()==(item.parent().find("li").size()-1) && newitem.index()==0) left=true;
										
									
									
									if (left) {
										item.animate({'left':0-opt.width},{duration:650,queue:false});
										newitem.css({'opacity':'1.0','position':'absolute','top':'0px','left':opt.width,'width':opt.width, 'height':opt.height});
										newitem.animate({'left':'0px','top':'0px','opacity':'1.0'},{duration:650,queue:false});
										
									} else  {
										item.animate({'left':opt.width},{duration:650,queue:false});
										newitem.css({'opacity':'1.0','position':'absolute','top':'0px','left':0-opt.width,'width':opt.width, 'height':opt.height});	
										newitem.animate({'left':'0px','top':'0px','opacity':'1.0'},{duration:650,queue:false});
									}
							}
					////////////////////////
					// END OF TRANSITIONs //
					////////////////////////			
						
						
						
								////////////////////////////////
								// CHANGE THE THUMBNAIL ICONS //
								////////////////////////////////
								item.parent().parent().parent().find(".mini_thumbnail_buttons").each(										
																function(i) {
																	var $this=$(this);
																	$this.css({'background-position':'top left'});
																	$this.data('on',false);
																	$this.find('#cd').css({'display':'none'});
																	if (i == newitem.parent().find("li").size() - newitem.index()-1) {
																		$this.data('on',true);
																		$this.find('#cd').data('t',0);																		
																		$this.find('#cd').css({'display':'block'});																																					
																		$this.css({'background-position':'bottom left'});
																	}
																});		
																																								
								
								
								
								
								// SET THE CURRENT ITEM IN DATA
								bannerTop.data('currentSlide',newitem);								
								
								// START 
								textanim(newitem,1500,bannerTop);
					}
					
					
					
					////////////////////////////////
					// SET CSS OF THE FULL BANNER //
					///////////////////////////////
					function initBorder(item,opt) {	
						item.find(".creative_layer").css({'width':opt.width+'px',
														  'height':opt.height+'px',
														  'position':'absolute',
														  'top':'0px',
														  'left':'0px'
														  });

														  
						item.css({
										"width":opt.width+'px',
										"height":opt.height+'px',
										"position":"relative"											
									});		
															

					}	
					
					
					
					
					//////////////////////////////////////
					// SET CSS OF THE BANNER HOLDER DIV //
					//////////////////////////////////////
					function initHolder(item,i,opt){					
						
						
						$(item).css({
										"width":opt.width+"px",
										"height":opt.height+"px",
										"z-index":"200",
										"position":"relative",			
										"overflow":"hidden",
										"left":0,
										"top":0
										
									});
									
						if (i>0) $(item).css({ "opacity":0});											
					}	
					
					
					////////////////////////////////////
					// CREATE A MASK FOR ALL SUBITEMS //
					////////////////////////////////////
					function initMask(item,opt) {
						item.find("ul").wrap("<div id='mask'></div>");
						item.find("#mask").css({
													'overflow':'hidden',
													'width':opt.width+'px',
													'height':opt.height+'px',
													'position':'absolute'													
													
												});		
				
				
						
					}
					
					
					
					////////////////////////////////////////////
					// START AFTER LOADIN THE KEN BURN SLIDER //
					////////////////////////////////////////////
					function startBanner(item,opt) {
								
								var dragH = item.data().dragH;
								
								// SET THE BORDER
								item.each( function() {
									$this=$(this);
									initBorder($this,opt)
								});
								
								// INITIALISING OF THE ITEMS AND MAIN BANNER HOLDER						
								item.find("li").each( function(i) {
									$this=$(this);
									initHolder($this,i,opt)
								});					
								
								item.css({'opacity':'0.0', 'display':'block'});
								item.animate({'opacity':'1.0'},1500);
																
								createNavigation(item,opt,item.data('currentSlide'));								
								
						}
					
					
					///////////////////////////
					// CREATE THE NAVIGATION //
					///////////////////////////
				
					function createNavigation(item,opt) {
								
								var toolbox = $('<div id="toolbox" style="opacity:0"></div>');
								if  ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 ) {
									toolbox.css({'z-index':'4200'});
									toolbox.addClass('noFilterClass');
								} else {
									toolbox.css({'z-index':'4200'});
								}
								item.append(toolbox);
								
								
								
								
								
								//var toolboxWidth = 3 + item.find("li").size() ;
								
								//toolbox.css({'z-index':'4051'});
												

								var prev=$("<div id='previous'></div>");
								var next=$("<div id='next'></div>");										

								////////////////////////////////////
								// HOVERING OVER THE ARROWS EVENT //
								////////////////////////////////////
								var hoverInit=function(button) {
									button.hover(
										function() {
											var $this=$(this);
											if ($this.attr('id')=='previous')
												$this.css({'background-position':'bottom right'});
											else
												$this.css({'background-position':'bottom left'});
										},
										function() {
											$this=$(this);
											if ($this.attr('id')=='previous')
												$this.css({'background-position':'top right'});
											else
												$this.css({'background-position':'top left'});
										});
								}
								
								///////////////////////////////
								// CLICK ON THE ARROWS EVENT //
								///////////////////////////////
								var clickInit=function(button) {
									button.click(
											function() {
												var $this=$(this);
												var newId = item.data('currentSlide').index();
												if ($this.attr('id')=="previous")												
													newId++;
												else
													newId--;
												if (newId==item.data('currentSlide').parent().find("li").size()) newId=0;
												if (newId==-1) newId=item.data('currentSlide').parent().find("li").size()-1;												
													
												var newcurrentSlide = item.find("li").each(
														function(i) {				
															$this=$(this);
															if (i == newId) {										
																swapBanner(item.data('currentSlide'),$this,item,opt);
															}
														});																										
												}										
										) //End of Button Click
								}
								
								hoverInit(prev);clickInit(prev);
								hoverInit(next);clickInit(next);
								
								toolbox.append(prev);
								toolbox.append(next);

								
								
								var thdivider=$("<div id='mini_divider'></div>");
								toolbox.append(thdivider);
								
								
								///////////////////////////
								// CREATE THE THUMBNAILS //
								///////////////////////////
										
								item.find("li").each(
									function(i) {
									
										var $this=$(this);
										var nums = $this.parent().find("li").size()-1;
										
										var thumbnail=$("<div id='"+(nums-i)+"' class='mini_thumbnail_buttons'></div>");
										toolbox.append(thumbnail);
												
										if (item.data('currentSlide').index() == (nums-i)) {
											thumbnail.data('on',true);
											thumbnail.css({'background-position':'bottom left'});
										}
										
										var cd=$('<div id="cd" class="countdown" style="display:none;background-position:0px 0px"></div>');																																
										cd.data('idNum',(nums-i));
										
										thumbnail.append(cd);
										
										if  ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 )
											cd.addClass('noFilterClass');
											
										if ((nums-i)==0) {
											cd.css({'display':'block'});
										}
										
											
										thumbnail.hover(
											function() {
												var $this=$(this);
												$this.css({'background-position':'top right'});
												
												if ($this.data().on == true) 
													$this.css({'background-position':'bottom right'});
												
												
												
												
												var it =$('<div id="image_thumbnail" style="opacity:0.0;left:'+$this.position().left+'px;top:'+($this.position().top + 10)+'px"></div>');
												$this.parent().append(it);
												
												
												if ($this.hasClass('wedding_mini_thumbnail_buttons')) {
													it.addClass('wedding_image_thumbnail');				
													
												} else {
													if ($this.hasClass('fashion_mini_thumbnail_buttons')) {
														it.addClass('fashion_image_thumbnail');													
													} else {
														if ($this.hasClass('custom_mini_thumbnail_buttons')) {
															it.addClass('custom_image_thumbnail');													
														}
													}
												}
												
												var searchedID = $(this).attr('id');
												var imgsrc="";
												var imgw=0;
												var imgh=0;
												item.find('li').each(function() {
													var $this=$(this);
													if ($this.index() == searchedID) {
														var bef=$this.find("#before");
														imgsrc= bef.attr('src');																												
														if ($this.data('orgWidth')==undefined) $this.data('orgWidth',bef.width());
														if ($this.data('orgHeight')==undefined) $this.data('orgHeight',bef.height());
														imgw = $this.data('orgWidth');
														imgh = $this.data('orgHeight');														
													}
												 });
												 												 
												if (it.width()==0)  {
													imgw = imgw/5;
													imgh = imgh/5;
													it.css({'width':imgw+'px','height':imgh+'px'});
												} else {
													imgw=it.width();
													imgh=it.height();
												}
												
												
												var newWidth =imgw-6;
												var newHeight = imgh-6;					
												var mt = parseInt(it.css('margin-top'),0);
												
												if (mt==0) mt = 0-newHeight-6;
												it.css({'left':($this.position().left+10+-newWidth/2)+'px','width':newWidth+6+'px','height':newHeight+6+'px','margin-top':mt+'px'});
												
												it.append('<div><div><img id="thimg" style="position:absolute;top:3px;left:3px;width:'+newWidth+'px;height:'+newHeight+'px" src="'+imgsrc+'"></div></div>');																								
												it.append('<div id="loader" style="loader"></div>');	
												it.append('<div id="image_thumbnail_arrow" style="position:absolute;left:'+(imgw/2 - 4)+'px;top:'+(imgh-1)+'px"></div>');												
												
												if ($this.hasClass('wedding_mini_thumbnail_buttons')) {
													it.find('#image_thumbnail_arrow').addClass('wedding_image_thumbnail_arrow');													
												} else {
													if ($this.hasClass('fashion_mini_thumbnail_buttons')) {
														it.find('#image_thumbnail_arrow').addClass('fashion_image_thumbnail_arrow');													
													} else {
														if ($this.hasClass('custom_mini_thumbnail_buttons')) {
															it.find('#image_thumbnail_arrow').addClass('custom_image_thumbnail_arrow');
														}
													}
												}
												
												it.animate({'opacity':1.0,'top':+1},{duration:200});
											},
											function() {
												var $this=$(this);
												$this.css({'background-position':'top left'});
												if ($this.data().on == true) 
													$this.css({'background-position':'bottom left'});
												$this.parent().find("#image_thumbnail").remove();
												
											});
												
										thumbnail.click(
											function() {
												var $this=$(this);
												if ($this.data().on != true)  {																										
													var newId = $(this).attr('id');																										
													var newcurrentSlide = item.find("li").each(
														function(i) {	
															var $this=$(this);														
															if (i == newId) {										
																swapBanner(item.data('currentSlide'),$this,item,opt);
															}
														});
												
												}
												
											}) //End of Thumbnail Click
									})  // End of Creating Thumbnails	
						item.find('#toolbox').css({'width':item.find("#toolbox").width()+'px'});
						
						} // End of Creating Navigation
					
					
			
					
						
					/////////////////////////////
					// START THE ROTATION HERE //
					/////////////////////////////
					function startRotation(item,opt) {
					
							
							
							// SET THE BORDER
							item.each( function() {
								$this=$(this);
								initBorder($this,opt)
							});
							
							// INITIALISING OF THE ITEMS AND MAIN BANNER HOLDER						
							item.find("li").each( function(i) {
								$this=$(this);
								initHolder($this,i,opt)
							});					
							
							item.find("ul").css({'display':'block'});
							
							
							item.find("#toolbox").animate({'opacity':'1.0'},1000);
							
							//turn off all slides, to make sure nothing pops up without our controll....
							if ($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 ) {
								item.find('ul li').css({'display':'block','opacity':'0.0'});
								item.find('ul li').animate({'opacity':'1.0'},300);
							} else {
								item.find('ul li').css({'display':'block'});
							}
							item.find('#mainloader').animate({'opacity':'0.3'},{duration:500, complete:function() {
								var $this=$(this);
								$this.remove();
							}});
							textanim(item.data('currentSlide'),500,item);						
				}
				
				
				////////////////////////////////////
				// INITIALISE THE DRAG FUNCTION  //
				///////////////////////////////////
				function initDrag(item) {
							
								jQuery(item.find("#drag")).animaDrag({ 
									speed: 0, 
									interval: 0, 
									easing: null, 										
									direction: 'vertical',			
									boundary: item.find('#mask'), 
									boundary_offset:30,//opt.banner_bordersize,
									grip: null, 
									overlay: false,					
									afterDiv: item.data('currentSlide')
									
								}); 
							}
							
				
				
				///////////////////
				// TEXTANIMATION //
				//////////////////			
				function textanim (item,edelay,bannerTop) {
				
								
								var counter=0;
								
								var clh = bannerTop.find('#creative_layer_holder');
								
								item.find('div').each(function(i) {
									var $this=$(this);									
									if ($this.data('parent') == undefined) $this.data('parent',$this.parent());
									if ($this.hasClass("creative_layer")) {
										$this.css({'opacity':'0.0'});
										$this.appendTo(clh);																		
									}
								});
								// SHITTA IE8 MUST BE HANDLED AN OTHER WAY.....
								//if (!($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 )) {
												bannerTop.find('#creative_layer_holder div').each(function(i) {
															
															var $this=$(this);
															
															
																
															if ($this.hasClass("creative_layer")) {
																	$this.css({'opacity':'1.0'});
																	if (($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 )) {
																		$this.addClass('noFilterClass');
																		$this.css({'display':'none'});
																	}
															}
															if ($this.attr('id')!="ext_ext_before" && 												
																!$this.hasClass("freshslice") && 
																!$this.hasClass("freshbox")) 
															{
																	$this.stop(true,true);
															}
															
															// REMEMBER OLD VALUES
															if ($this.data('_top') == undefined) $this.data('_top',$this.position().top);
															if ($this.data('_left') == undefined) $this.data('_left',$this.position().left);
															if ($this.data('_op') == undefined) { $this.data('_op',$this.css('opacity'));}
															
													
															// CHANGE THE z-INDEX HERE
															$this.css({'z-index':1200});
															
															// IF IE8 THAN WE NEED TO MAKE IT VISIBLE FIRST																														
															if (($.browser.msie && $.browser.version >= 7 && $.browser.version < 9 )) {
																if ($this.hasClass("creative_layer")) {
																	$this.css({'display':'block'});
																	//$this.delay(edelay+(counter+1)*200).animate({'top':$this.data('_top')+20+"px"},{duration:300,queue:false,complete:function(){$(this).css({'display':'block'})}}).animate({'top':$this.data('_top')-20+"px"},{duration:300,queue:true});
																	//counter++;
													
																}
															} else {
																	
																	//// -  SLIDE UP   -   ////
																	if ($this.hasClass('slideup')) {
																			$this.animate({'top':$this.data('_top')+20+"px"},
																							{duration:0,queue:false})
																				   .delay(edelay + (counter+1)*200)
																				   .animate({'top':$this.data('_top')-20+"px"},
																							{duration:300,queue:true})
																		counter++;
																	}
																	
																	
																	//// -  SLIDE RIGHT   -   ////
																	if ($this.hasClass('slideright')) {
																		$this.animate({'left':$this.data('_left')-20+"px"},
																					{duration:0,queue:false})
																		   .delay(edelay + (counter+1)*200)
																		   .animate({'left':$this.data('_left')+20+"px"},
																					{duration:300,queue:true})
																		counter++;
																	}
																	
																	
																	//// -  SLIDE DOWN  -   ////
																	if ($this.hasClass('slidedown')) {
																			$this.animate({'top':$this.data('_top')-20+"px"},
																							{duration:0,queue:false})
																				   .delay(edelay + (counter+1)*200)
																				   .animate({'top':$this.data('_top')+20+"px"},
																							{duration:300,queue:true})
																		counter++;
																	}
																	
																
																	//// -  SLIDE LEFT   -   ////
																	if ($this.hasClass('slideleft')) {
																		$this.animate({'left':$this.data('_left')+20+"px"},
																					{duration:0,queue:false})
																		   .delay(edelay + (counter+1)*200)
																		   .animate({'left':$this.data('_left')-20+"px"},
																					{duration:300,queue:true})
																		counter++;
																	}
																	
																	
																	//// -  FADE UP   -   ////
																	if ($this.hasClass('fadeup')) {
																			$this.animate({'top':$this.data('_top')+20+"px",
																							 'opacity':0},
																							{duration:0,queue:false})
																				   .delay(edelay + (counter+1)*200)
																				   .animate({'top':$this.data('_top')-20+"px",
																							 'opacity':$this.data('_op')},
																							{duration:300,queue:true})
																		counter++;
																	}
																	
																	
																	//// -  FADE RIGHT   -   ////
																	if ($this.hasClass('faderight')) {
																		$this.animate({'left':$this.data('_left')-20+"px",
																					 'opacity':0},
																					{duration:0,queue:false})
																		   .delay(edelay + (counter+1)*200)
																		   .animate({'left':$this.data('_left')+20+"px",
																					'opacity':$this.data('_op')},
																					{duration:300,queue:true})
																		counter++;
																	}
																	
																	
																	//// -  FADE DOWN  -   ////
																	if ($this.hasClass('fadedown')) {
																			$this.animate({'top':$this.data('_top')-20+"px",
																							 'opacity':0},
																							{duration:0,queue:false})
																				   .delay(edelay + (counter+1)*200)
																				   .animate({'top':$this.data('_top')+20+"px",
																							 'opacity':$this.data('_op')},
																							{duration:300,queue:true})
																		counter++;
																	}
																	
																	
																	//// -  FADE LEFT   -   ////
																	if ($this.hasClass('fadeleft')) {
																		$this.animate({'left':$this.data('_left')+20+"px",
																					 'opacity':0},
																					{duration:0,queue:false})
																		   .delay(edelay + (counter+1)*200)
																		   .animate({'left':$this.data('_left')-20+"px",
																					'opacity':$this.data('_op')},
																					{duration:300,queue:true})
																		counter++;
																	}
																	
																	//// -  FADE   -   ////
																	if ($this.hasClass('fade')) {
																		$this.animate({'opacity':0},
																					{duration:0,queue:false})
																		   .delay(edelay + (counter+1)*200)
																		   .animate({'opacity':$this.data('_op')},
																					{duration:300,queue:true})
																		counter++;
																	}
															} // End of NON IE ANIMS
														});	// END OF TEXT ANIMS ON DIVS
											/*	}  else {   //END OF IE 8 CHECK 
													clh.css({'display':'none'});
														bannerTop.find('#creative_layer_holder div').each(function(i) {														
															var $this=$(this);
															$this.delay(edelay).animate({'opacity':'1.0'},{duration:0,complete:function() {$(this).css({'filter':'0'})}});
														});
													clh.delay(edelay).animate({'opacity':'1.0'},{duration:0,complete:function() {$(this).css({'filter':'0','display':'block'})}});
												}*/
										
										
					
				}
})(jQuery);			

				
			

			   