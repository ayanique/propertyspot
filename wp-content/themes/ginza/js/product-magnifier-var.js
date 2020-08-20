"use strict";
var ginza_magnifier_vars;
var yith_magnifier_options = {
		sliderOptions: {
			responsive: ginza_magnifier_vars.responsive,
			circular: ginza_magnifier_vars.circular,
			infinite: ginza_magnifier_vars.infinite,
			direction: 'left',
			debug: false,
			auto: false,
			align: 'left',
			height: 'auto',
			width: 'auto',
			prev    : {
				button  : "#slider-prev",
				key     : "left"
			},
			next    : {
				button  : "#slider-next",
				key     : "right"
			},
			scroll : {
				items     : 1,
				pauseOnHover: true
			},
			items   : {
				visible: Number(ginza_magnifier_vars.visible),
			},
			swipe : {
				onTouch:    true,
				onMouse:    true
			},
			mousewheel : {
				items: 1
			}
		},
		showTitle: false,
		zoomWidth: ginza_magnifier_vars.zoomWidth,
		zoomHeight: ginza_magnifier_vars.zoomHeight,
		position: ginza_magnifier_vars.position,
		lensOpacity: ginza_magnifier_vars.lensOpacity,
		softFocus: ginza_magnifier_vars.softFocus,
		adjustY: 0,
		disableRightClick: false,
		phoneBehavior: ginza_magnifier_vars.phoneBehavior,
		loadingLabel: ginza_magnifier_vars.loadingLabel,
	};