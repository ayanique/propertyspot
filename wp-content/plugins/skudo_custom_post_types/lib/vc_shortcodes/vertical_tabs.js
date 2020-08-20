Object.defineProperty(Array.prototype, 'upper_difference', {
    enumerable: false,
    value: function(a) { this.filter(function(i) {return a.indexOf(i) < 0;}); }
});

(function ($) {
	
    var Shortcodes = vc.shortcodes;

	window.VcVerticalTabsView = vc.shortcode_view.extend({
		fixed : true,
	    new_tab_adding:false,
	    events:{
	        'click .add_tab':'addTab',
	        'click > .vc_controls .vc_control-btn-delete':'deleteShortcode',
	        'click > .vc_controls .vc_control-btn-edit':'editElement',
	        'click > .vc_controls .vc_control-btn-clone':'clone'
	    },
	    initialize:function (params) {
	        window.VcVerticalTabsView.__super__.initialize.call(this, params);
	        _.bindAll(this, 'stopSorting');
			var el = this;
				el.$style = params.model.attributes.params.style_vt;
			setTimeout(function(){ el.$el.addClass(params.model.attributes.params.style_vt); },500);
			if (typeof vt_checker === 'undefined') vt_checker = [];
			vt_checker.push(setInterval(function(){
				//aumentou se o tempo do timeout p aliviar a carga de execuções. intervals num array p evitar redeclarações.
				//console.log('vt_checker checking... : '+el.cid);
				if (el.$style != params.model.attributes.params.style_vt){
					el.$el.removeClass(el.$style);
					el.$style = params.model.attributes.params.style_vt;
					el.$el.addClass(params.model.attributes.params.style_vt);
				}
				
			},5000));
	    },
	    render:function () {
	        window.VcVerticalTabsView.__super__.render.call(this);
	        this.$tabs = this.$el.find('.wpb_tabs_holder');
	        
	        this.createAddTabButton();
	        
	        if ( !Shortcodes.where( { parent_id: this.model.id } ).length && this.model.view.model.get('cloned') === false) {
		        this.new_tab_adding = false;
		        var tab_title = window.i18nLocale.tab,
		            tabs_count = this.$tabs.find('[data-element_type=verticaltab]').length,
		            tab_id = (+new Date() + '-' + tabs_count + '-' + Math.floor(Math.random() * 11)),
					row_id = (+new Date() + '-' + tabs_count + '-' + Math.floor(Math.random() * 7)),
					el = this;		    
	
				var modelid = this.model.id;
	
		        vt = vc.shortcodes.create({shortcode:'verticaltab', params:{title:tab_title, tab_id:tab_id}, parent_id:modelid});
				row = vc.shortcodes.create({shortcode: 'vc_row_inner', parent_id: vt.id});
				vc.shortcodes.create({shortcode:'vc_column_inner', parent_id:row.id, params:{width:'1/1'}});
	        }
	        return this;
	    },
	    ready:function (e) {
	        window.VcVerticalTabsView.__super__.ready.call(this, e);
			var el = this;

			jQuery(el.$el).find('.wpb_verticaltab > .controls_column').not('.bottom-controls').find('a.column_edit').click(function(){ 
				setTimeout(function(){
					switch(el.$style){
						case 'icon':
							jQuery('.wpb-textinput.title').closest('.wpb_el_type_textfield').css('display','none');
							break;
						case 'text':
							jQuery('.wpb_el_type_skudo_fa').css('display','none');
							break;
					}
				}, 1000);
			});
	    },
	    createAddTabButton:function () {
	        var new_tab_button_id = (+new Date() + '-' + Math.floor(Math.random() * 11));
	        this.$tabs.siblings('.tabs_controls').append('<div id="new-tab-' + new_tab_button_id + '" class="new_element_button"></div>');
	        this.$add_button = jQuery('<li class="add_tab_block"><a href="#new-tab-' + new_tab_button_id + '" class="add_tab" title="' + window.i18nLocale.add_tab + '">+</a></li>').appendTo(this.$tabs.find(".tabs_controls"));
	    },
	    addTab:function (e) {

	        if (e) e.preventDefault();
	        this.new_tab_adding = true;
	        var tab_title = window.i18nLocale.tab,
	            tabs_count = this.$tabs.find('[data-element_type=verticaltab]').length,
	            tab_id = (+new Date() + '-' + tabs_count + '-' + Math.floor(Math.random() * 11)),
				row_id = (+new Date() + '-' + tabs_count + '-' + Math.floor(Math.random() * 7)),
				el = this;		    

	        vt = vc.shortcodes.create({shortcode:'verticaltab', params:{title:tab_title, tab_id:tab_id}, parent_id:this.model.id});
			row = vc.shortcodes.create({shortcode: 'vc_row_inner', parent_id: vt.id});
			vc.shortcodes.create({shortcode:'vc_column_inner', parent_id:row.id, params:{width:'1/1'}});

			jQuery(el.$el).find('.wpb_verticaltab > .controls_column').not('.bottom-controls').find('a.column_edit').click(function(){ 
				setTimeout(function(){
					switch(el.$style){
						case 'icon':
							jQuery('.wpb-textinput.title').closest('.wpb_el_type_textfield').css('display','none');
							break;
						case 'text':
							jQuery('.wpb_el_type_skudo_fa').css('display','none');
							break;
					}
				}, 1000);
			});
	        return false;
	    },
	    stopSorting:function (event, ui) {
	        var shortcode;
	        this.$tabs.find('ul.tabs_controls li:not(.add_tab_block)').each(function (index) {
	            var href = jQuery(this).find('a').attr('href').replace("#", "");
	            shortcode = vc.shortcodes.get(jQuery('[id=' + jQuery(this).attr('aria-controls') + ']').data('model-id'));
	            vc.storage.lock();
	            shortcode.save({'order':jQuery(this).index()}); // Optimize
	        });
	        shortcode.save();
	    },
	    changedContent:function (view) {
		    
	        var params = view.model.get('params');
	        if (!this.$tabs.hasClass('ui-tabs')) {
	            this.$tabs.tabs({
	                select:function (event, ui) {
	                    if (jQuery(ui.tab).hasClass('add_tab')) {
	                        return false;
	                    }
	                    return true;
	                }
	            });
				
	            this.$tabs.find(".ui-tabs-nav").prependTo(this.$tabs);
	            this.$tabs.find(".ui-tabs-nav").sortable({
	                axis:(this.$tabs.closest('[data-element_type]').data('element_type') == 'verticaltabs' ? 'y' : 'x'),
	                update:this.stopSorting,
	                items:"> li:not(.add_tab_block)"
	            });
	        } 
	        if (view.model.get('cloned') === true) {
	            var cloned_from = view.model.get('cloned_from'),
	                $after_tab = jQuery('[href="#tab-' + cloned_from.params.tab_id + '"]', this.$content).parent(),
	                icon = (params.icon) ? params.icon : "fa-adjust",
	                title = (params.title) ? params.title : "Tab",
	                $new_tab = jQuery("<li><a href='#tab-" + params.tab_id + "'><i class='fa "+icon+"'></i><span class='title'>" + title + "</span></a></li>").insertAfter($after_tab);
	            this.$tabs.tabs('refresh');
	            this.$tabs.tabs("option", 'active', $new_tab.index());
	        } else {
		        var icon = (params.icon) ? params.icon : "fa-adjust",
		        	title = (params.title) ? params.title : "Tab";
	            jQuery("<li><a href='#tab-" + params.tab_id + "'><i class='fa "+icon+"'></i><span class='title'>" + title + "</span></a></li>")
	                .insertBefore(this.$add_button);
	            this.$tabs.tabs('refresh');
	            this.$tabs.tabs("option", "active", this.new_tab_adding ? jQuery('.ui-tabs-nav li', this.$content).length - 2 : 0);

	        }
	        this.new_tab_adding = false;
	    },
	    
	    clone: function(ev){
		    
		    ev.preventDefault();
		    ev.stopPropagation();
		    
		    var $elem = this;
		    
		    if (this.$content.find('.wpb_vc_media_grid').length){
				
				//tem uma media grid. activate panic mode
			    var verticaltabs_before_clone = vc.shortcodes.where({ shortcode: 'verticaltabs' });
			    
			    //do the normal cloning.
			    window.VcVerticalTabsView.__super__.clone.call(this);

				//do our awesome tricks
			    var new_verticaltabs = vc.shortcodes.where({ shortcode: 'verticaltabs' }).upper_difference(verticaltabs_before_clone);
			    
			    var $vtabs = jQuery('.wpb_verticaltabs[data-model-id="'+new_verticaltabs[0].id+'"]');

				//until for the html to complete
				var ulchecker = setInterval(function(){
					if (jQuery($vtabs).find('.wpb_tabs_holder').children('.attachment-thumbnails').length){
						window.top.clearInterval(ulchecker);
						
						$vtabs.find('div[data-element_type="vc_media_grid"] .wpb_element_wrapper h4').after($vtabs.find('.wpb_tabs_holder').children('.attachment-thumbnails').removeClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all ui-sortable').removeAttr('role').html( $elem.$content.find('.wpb_vc_media_grid').first().find('ul.attachment-thumbnails').html() ));
						$vtabs.find('.wpb_tabs_holder .attachment-thumbnails').each(function(){
							if (jQuery(this).siblings('.attachment-thumbnails').length) jQuery(this).siblings('.attachment-thumbnails').remove();
							if (jQuery(this)[0].hasChildNodes()){
								jQuery(this).removeClass('image-exists');
								jQuery(this).siblings('.column_edit_trigger').addClass('image-exists');
							} else {
								jQuery(this).addClass('image-exists');
								jQuery(this).siblings('.column_edit_trigger').removeClass('image-exists');
							}
						});
						$vtabs.find('.wpb_tabs_holder').prepend( $vtabs.find('.tabs_controls').addClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all ui-sortable') );
						
						if (typeof $vtabs.find('.wpb_tabs_holder').data('uiTabs') != "undefined"){
							$vtabs.find('.wpb_tabs_holder').tabs('destroy');
						}
						$vtabs.find('.wpb_tabs_holder').tabs();
					}
				}, 200);
				
		    } else {
			    //ta tudo ok, siga.
			    window.VcVerticalTabsView.__super__.clone.call(this);
		    }
		    
	    },
	    
	    cloneModel:function (model, parent_id, save_order) {
	        var shortcodes_to_resort = [],
	            new_order = _.isBoolean(save_order) && save_order === true ? model.get('order') : parseFloat(model.get('order')) + vc.clone_index,
	            model_clone,
	            new_params = _.extend({}, model.get('params'));
	            
	        if (model.get('shortcode') === 'verticaltab') _.extend(new_params, {tab_id:+new Date() + '-' + this.$tabs.find('[data-element-type=verticaltab]').length + '-' + Math.floor(Math.random() * 11)});
	        
	        var new_id = vc_guid();
	        if (model.get('shortcode') == 'vc_media_grid'){
		        new_params = _.extend(new_params, {grid_id:"vc_gid:"+(Date.now()+"-"+new_id+"-"+Math.floor(11*Math.random()))});
	        }
	        
	        model_clone = Shortcodes.create({shortcode:model.get('shortcode'), id:new_id, parent_id:parent_id, order:new_order, cloned:(model.get('shortcode') === 'verticaltab' ? false : true), cloned_from:model.toJSON(), params:new_params});

	        _.each(Shortcodes.where({parent_id:model.id}), function (shortcode) {
				this.cloneModel(shortcode, model_clone.get('id'), true);
	        }, this);
	        
	        return model_clone;
	    },
	});
	
	
	/* column view from vc [needed] */
	window.VcColumnView = vc.shortcode_view.extend( {
		events: {
			'click > .vc_controls [data-vc-control="delete"]': 'deleteShortcode',
			'click > .vc_controls [data-vc-control="add"]': 'addElement',
			'click > .vc_controls [data-vc-control="edit"]': 'editElement',
			'click > .vc_controls [data-vc-control="clone"]': 'clone',
			'click > .wpb_element_wrapper > .vc_empty-container': 'addToEmpty'
		},
		current_column_width: false,
		initialize: function ( options ) {
			window.VcColumnView.__super__.initialize.call( this, options );
			_.bindAll( this, 'setDropable', 'dropButton' );
		},
		ready: function ( e ) {
			window.VcColumnView.__super__.ready.call( this, e );
			this.setDropable();
			return this;
		},
		render: function () {
			window.VcColumnView.__super__.render.call( this );
			this.current_column_width = this.model.get( 'params' ).width || '1/1';
			this.$el.attr( 'data-width', this.current_column_width );
			this.setEmpty();
			return this;
		},
		changeShortcodeParams: function ( model ) {
			window.VcColumnView.__super__.changeShortcodeParams.call( this, model );
			this.setColumnClasses();
			this.buildDesignHelpers();
		},
		designHelpersSelector: '> .vc_controls .column_add',
		buildDesignHelpers: function () {
			var css = this.model.getParam( 'css' ),
				$column_toggle = this.$el.find( this.designHelpersSelector ).get( 0 ),
				image, color, $image, $color;
			this.$el.find( '> .vc_controls .vc_column_color' ).remove();
			this.$el.find( '> .vc_controls .vc_column_image' ).remove();
			var matches = css.match( /background\-image:\s*url\(([^\)]+)\)/ )
			if ( matches && ! _.isUndefined( matches[ 1 ] ) ) {
				image = matches[ 1 ];
			}
			var matches = css.match( /background\-color:\s*([^\s\;]+)\b/ )
			if ( matches && ! _.isUndefined( matches[ 1 ] ) ) {
				color = matches[ 1 ];
			}
			var matches = css.match( /background:\s*([^\s]+)\b\s*url\(([^\)]+)\)/ )
			if ( matches && ! _.isUndefined( matches[ 1 ] ) ) {
				color = matches[ 1 ];
				image = matches[ 2 ];
			}
			if ( image ) {
				$( '<span class="vc_column_image" style="background-image: url(' + image + ');" title="' + i18nLocale.column_background_image + '"></span>' )
					.insertBefore( $column_toggle );
			}
			if ( color ) {
				$( '<span class="vc_column_color" style="background-color: ' + color + '" title="' + i18nLocale.column_background_color + '"></span>' )
					.insertBefore( $column_toggle );
			}
		},
		setColumnClasses: function () {
			var offset = this.model.getParam( 'offset' ) || '',
				width = this.model.getParam( 'width' ) || '1/1',
				css_class_width = this.convertSize( width ), current_css_class_width;
			this.current_offset_class && this.$el.removeClass( this.current_offset_class );
			if ( this.current_column_width !== width ) {
				current_css_class_width = this.convertSize( this.current_column_width );
				this.$el
					.attr( 'data-width', width )
					.removeClass( current_css_class_width )
					.addClass( css_class_width );
				this.current_column_width = width;
			}
			if ( offset.match( /vc_col\-sm\-\d+/ ) ) {
				this.$el.removeClass( css_class_width );
			}
			if ( ! _.isEmpty( offset ) ) {
				this.$el.addClass( offset );
			}
			this.current_offset_class = offset;
		},
		addToEmpty: function ( e ) {
			e.preventDefault();
			if ( $( e.target ).hasClass( 'vc_empty-container' ) ) {
				this.addElement( e );
			}
		},
		setDropable: function () {
			this.$content.droppable( {
				greedy: true,
				accept: (this.model.get( 'shortcode' ) == 'vc_column_inner' ? '.dropable_el' : ".dropable_el,.dropable_row"),
				hoverClass: "wpb_ui-state-active",
				drop: this.dropButton
			} );
			return this;
		},
		dropButton: function ( event, ui ) {
			if ( ui.draggable.is( '#wpb-add-new-element' ) ) {
				new vc.element_block_view( { model: { position_to_add: 'end' } } ).show( this );
			} else if ( ui.draggable.is( '#wpb-add-new-row' ) ) {
				this.createRow();
			}
		},
		setEmpty: function () {
			this.$el.addClass( 'vc_empty-column' );
			this.$content.addClass( 'vc_empty-container' );
		},
		unsetEmpty: function () {
			this.$el.removeClass( 'vc_empty-column' );
			this.$content.removeClass( 'vc_empty-container' );
		},
		checkIsEmpty: function () {
			if (this.model.id){
				if ( Shortcodes.where( { parent_id: this.model.id } ).length ) {
					this.unsetEmpty();
				} else {
					this.setEmpty();
				}				
			} 
			window.VcColumnView.__super__.checkIsEmpty.call( this );
		},
		/**
		 * Create row
		 */
		createRow: function () {
			var row = Shortcodes.create( { shortcode: 'vc_row_inner', parent_id: this.model.id } );
			Shortcodes.create( { shortcode: 'vc_column_inner', params: { width: '1/1' }, parent_id: row.id } );
			return row;
		},
		convertSize: function ( width ) {
			var prefix = 'vc_col-sm-',
				numbers = width ? width.split( '/' ) : [
					1,
					1
				],
				range = _.range( 1, 13 ),
				num = ! _.isUndefined( numbers[ 0 ] ) && _.indexOf( range,
					parseInt( numbers[ 0 ], 10 ) ) >= 0 ? parseInt( numbers[ 0 ], 10 ) : false,
				dev = ! _.isUndefined( numbers[ 1 ] ) && _.indexOf( range,
					parseInt( numbers[ 1 ], 10 ) ) >= 0 ? parseInt( numbers[ 1 ], 10 ) : false;
			if ( num !== false && dev !== false ) {
				return prefix + (12 * num / dev);
			}
			return prefix + '12';
		}
	} );
	/* end of column view */ 	

	window.VcVerticalTabView = window.VcColumnView.extend({
	    render:function () {
	        var params = this.model.get('params');
	        window.VcVerticalTabView.__super__.render.call(this);
	        if(!params.tab_id) {
	          params.tab_id = (+new Date() + '-' + Math.floor(Math.random() * 11));
	          this.model.save('params', params);
	        }
	        this.id = 'tab-' + params.tab_id;
	        this.$el.attr('id', this.id);
	        
	        return this;
	    },
	    ready:function (e) {
		    
		    window.VcVerticalTabView.__super__.ready.call(this, e);
		    
		    var vtid = this.model.id;
		    if (!window.removethiscontent || window.removethiscontent.length < 1) window.removethiscontent = [];
		    var numbrows = 0;
			_.each(Shortcodes.where({parent_id:vtid}), function (shortcode) {
				if (!numbrows) {
					numbrows = 1;
				} else {
					window.removethiscontent.push(vc.shortcodes._byId[shortcode.id]);
				}
			})
			
	        this.$tabs = this.$el.closest('.wpb_tabs_holder');
			jQuery(this.$tabs).find('.wpb_verticaltab').addClass('wpb_vc_tab');
	        var params = this.model.get('params');
	        if(params)
	        return this;
	    },
	    changeShortcodeParams:function (model) {
	        var params = model.get('params'),
				icon = (params.icon) ? params.icon : "fa-adjust";
	        window.VcVerticalTabView.__super__.changeShortcodeParams.call(this, model);
	        if (_.isObject(params) && _.isString(params.title) && _.isString(params.tab_id)) {
	        	var title = (params.title) ? params.title : "Tab";
				var htmlaux = '<i class="fa '+icon+'"></i><span class="title">' + title +'</span>';
				jQuery('.ui-tabs-nav [href="#tab-' + params.tab_id + '"]').html(htmlaux);
	        }
	    },
	    deleteShortcode:function (e) {
	        if (_.isObject(e)) e.preventDefault();
	        var answer = confirm(window.i18nLocale.press_ok_to_delete_section);
	        if (answer !== true) return false;
	        this.model.destroy();
	        var params = this.model.get('params'),
	            current_tab_index = jQuery('[href="#tab-' + params.tab_id + '"]', this.$tabs).parent().index();
	        jQuery('[href="#tab-' + params.tab_id + '"]').parent().remove();
	        this.$tabs.tabs('refresh');
	        var tab_length = this.$tabs.find('.ui-tabs-nav li:not(.add_tab_block)').length;
	        if (current_tab_index < tab_length) {
	            this.$tabs.tabs("option", "active", current_tab_index);
	        } else if(tab_length>0) {
	            this.$tabs.tabs("option", "active", tab_length-1);
	        }
	    },
	    cloneModel:function (model, parent_id, save_order) {
	        var shortcodes_to_resort = [],
	            new_order = _.isBoolean(save_order) && save_order === true ? model.get('order') : parseFloat(model.get('order')) + vc.clone_index,
	            new_params = _.extend({}, model.get('params'));
	        if (model.get('shortcode') === 'verticaltab') _.extend(new_params, {tab_id:+new Date() + '-' + this.$tabs.find('[data-element_type=verticaltab]').length + '-' + Math.floor(Math.random() * 11)});
	        var model_clone = Shortcodes.create({shortcode:model.get('shortcode'), parent_id:parent_id, order:new_order, cloned:true, cloned_from:model.toJSON(), params:new_params});
	        _.each(Shortcodes.where({parent_id:model.id}), function (shortcode) {
	            this.cloneModel(shortcode, model_clone.id, true);
	        }, this);
	        return model_clone;
	    }
	});
	
})(jQuery);


jQuery(window).on("load", function(){
	if (window.removethiscontent && window.removethiscontent.length){
		for (var i = 0; i<window.removethiscontent.length; i++){
			window.removethiscontent[i].destroy();
		}
	}
	//frontend magics
	if (window.top===window.self && window.top.document.body.classList.toString().indexOf("compose-mode")>0){
		upper_special_tabs_handler();
	}
});


function upper_special_tabs_handler(){
	jQuery('.special_tabs:not(.upper-special-tabs-ready)', window.parent.frames[0].document).each(function(){ 
		
		var $vtabs = jQuery(this),
			$labels = $vtabs.find('.vc_verticaltab > .label');
		if ($vtabs.find('.labels-container').length) $labels.appendTo($vtabs.find('.tab-selector .labels-container'));
		else $labels.appendTo($vtabs.find('.tab-selector'));
			
		var $contents = $vtabs.find('.vc_verticaltab > .content');
			$contents.appendTo($vtabs.find('.tab-container'));

		$contents.find("p:empty, br:empty").remove();
		
		/* pequenos tweaks */
		$vtabs.find('.vc_verticaltab .vc_controls .vc_controls-bc').remove();
		jQuery($labels[0]).add(jQuery($contents[0])).addClass('current').siblings().removeClass('current');
		
		if ($vtabs.hasClass('horizontal'))
			jQuery($contents[0]).css({
					'opacity':1,
					'left':'0%',
					'position':'absolute'
				});
		else 
			jQuery($contents[0]).css({
					'opacity':1,
					'top':'0%'
				});
		
		$contents.find('img.aligncenter').parents('p').css('text-align','center');
		
		if (!$vtabs.hasClass('horizontal')) $vtabs.find('.tab-container').css('min-height', $vtabs.find('.tab-selector').height());
		else $vtabs.find('.tab-container').css('min-height', $vtabs.find('.tab-container .current').height()+10);
		
		if ($vtabs.hasClass('horizontal')){
			for ( var i = 1; i < $contents.length; i++){
				jQuery($contents[i]).css({
					'position':'absolute',
					'margin-left':'100%',
					opacity:0
				});
			}
		} else {
			for ( var i = 1; i < $contents.length; i++){
				jQuery($contents[i]).css({
					'position':'absolute',
					'margin-top':'100%',
					opacity:0
				});
			}
		}

		if ($vtabs.hasClass('horizontal') && !$vtabs.find('.tab-selector .labels-container').length){
			$vtabs.find('.tab-selector div.label').wrapAll('<div class="labels-container" />');
			$vtabs.find('.tab-selector').css({'width':'100%','text-align':'center'}).find('.labels-container').css({'display':'inline-block','margin':'0 auto'});
		}
		
		if ($labels.length) upper_manage_vtabs_labels($labels);

		upper_vtabs_add_new_handler($vtabs);
		
		var axis = $vtabs.is('.horizontal') ? "x" : "y";
		$vtabs.find('.tab-selector .label').parent().sortable({
			items: '.label',
			axis : axis,
			stop : function(event, ui){
				upper_update_vtabs_order( jQuery(ui.item[0]).closest('.special_tabs') );
			}
		}).on('sortupdate', function(event, ui){
			upper_update_vtabs_order( jQuery(event.currentTarget).closest('.special_tabs') );
		});
		
		$vtabs.addClass('upper-special-tabs-ready');
		
	});
	
	// array of verticaltabs
	window.top.upper_special_tabs = window.top.vc.shortcodes.where({ shortcode : "verticaltabs" });
	
	// this will serve for the comparison
	window.top.upper_vtabs = window.top.vc.shortcodes.where({ shortcode: 'verticaltab' });
	if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
		window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
		delete window.top.upper_check_for_vtabs_changes_interval;
	}
	window.top.upper_check_for_vtabs_changes_interval = window.top.setInterval(function(){
		window.top.upper_check_for_vtabs_changes();
	}, 2000);
}

function upper_vtabs_add_new_handler($vtabs){
	$vtabs.siblings('.vc_controls').find('.vc_controls-bc a.vc_control-btn-append')
		.add($vtabs.siblings('.vc_controls').find('a.vc_control-btn-prepend'))
	.unbind('click').on('click', function(e){
		e.preventDefault();
		e.stopPropagation();

		var new_tab_id = upper_guidGenerator();
		
		if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
			window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
			delete window.top.upper_check_for_vtabs_changes_interval;
		}
		
		window.top.newtab = window.top.vc.shortcodes.create({ shortcode: 'verticaltab', params:{title:'NEW TAB', tab_id:new_tab_id}, parent_id: jQuery(e.currentTarget, window.parent.frames[0].document).closest('.vc_verticaltabs').data('model-id')  });	
		window.top.newrow = window.top.vc.shortcodes.create({shortcode: 'vc_row_inner', parent_id: window.top.newtab.id });
		window.top.newcolumn = window.top.vc.shortcodes.create({shortcode: 'vc_column_inner', parent_id:window.top.newrow.id, params:{width:'1/1'}});
		
		window.top.vc.builder.update( window.top.newtab );
		
		var wait_for_vt = setInterval(function(){
			if (jQuery('.vc_verticaltab[data-model-id="'+window.top.newtab.id+'"]', window.parent.frames[0].document).length){
				clearInterval(wait_for_vt);
				
				if (jQuery(e.currentTarget).hasClass('vc_control-btn-prepend'))
					jQuery('.vc_verticaltab[data-model-id="'+window.top.newtab.id+'"]', window.parent.frames[0].document).addClass('prepend');
					
				jQuery('.vc_verticaltab[data-model-id="'+window.top.newtab.id+'"] > .content', window.parent.frames[0].document).attr('class','content '+window.top.newtab.id);
				jQuery('.vc_verticaltab[data-model-id="'+window.top.newtab.id+'"] > .label', window.parent.frames[0].document).attr('class','label '+window.top.newtab.id);
				
				window.top.vc.builder.update( window.top.newrow );
				var wait_for_row = setInterval(function(){
					if (jQuery('.vc_vc_row_inner[data-model-id="'+window.top.newrow.id+'"]', window.parent.frames[0].document).length){
						clearInterval(wait_for_row);
						
						window.top.vc.builder.update( window.top.newcolumn );
						var wait_for_column = setInterval(function(){
							if (jQuery('.vc_vc_column_inner[data-model-id="'+window.top.newcolumn.id+'"]', window.parent.frames[0].document).length){
								clearInterval(wait_for_column);
								upper_special_tabs_handler();
								upper_check_for_vtabs_changes();
								upper_update_vtabs_order($vtabs);
								$vtabs.find('.tab-selector .label').parent().trigger('sortupdate').trigger('change');
							} 
							
						},100);
						
					}
				}, 100);
			}
		}, 100);
		
	});
}

function upper_manage_vtabs_labels($labels){
	if ($labels.length > 0){
		$labels.each(function(){
			var has_current = false;
			var $vtabs = jQuery(this).closest('.vc_verticaltabs'),
				$specialtabs = $vtabs.children('.special_tabs'),
				$contents = $vtabs.find('.tab-container > .content');
			
			if (!jQuery(this).is('.cloned')) {
				if (jQuery(this).is('.current')){
					jQuery(this).attr('class', 'current label '+$vtabs.find('.vc_verticaltab').eq( jQuery(this).index() ).data('model-id'));
					$vtabs.find('.tab-container .content').eq( jQuery(this).index() ).attr('class','current content '+$vtabs.find('.vc_verticaltab').eq( jQuery(this).index() ).data('model-id'));
				} else {
					jQuery(this).attr('class', 'label '+$vtabs.find('.vc_verticaltab').eq( jQuery(this).index() ).data('model-id'));
					$vtabs.find('.tab-container .content').eq( jQuery(this).index() ).attr('class','content '+$vtabs.find('.vc_verticaltab').eq( jQuery(this).index() ).data('model-id'));
				}
			} else {
				jQuery(this).attr('class','label '+jQuery($vtabs, window.parent.frames[0].document).find('.vc_verticaltab').last().data('model-id')).removeClass('cloned');
				jQuery($vtabs, window.parent.frames[0].document).find('.tab-container > .content.cloned').attr('class','content '+jQuery($vtabs, window.parent.frames[0].document).find('.vc_verticaltab').last().data('model-id')).removeClass('cloned');
			}
			
			jQuery(this).unbind('click').on('click',function(){
				var $label = jQuery(this);
				var $content = $contents.filter('.'+$label.attr('class').replace('label','').replace('current').replace('ui-sortable-handle','').trim());
				if (!$label.hasClass('current')){
					
					if ($content.height() > $label.parents('.tab-selector').height())
						$vtabs.find('.tab-container').stop().animate({'height': $content.height()+10}, 1000, 'easeInOutExpo');
					else
						$vtabs.find('.tab-container').stop().animate({'height': $label.parents('.tab-selector').height()+10}, 1000, 'easeInOutExpo'); 
					
					if ($specialtabs.hasClass('horizontal'))
						$content.css({'margin-left':'100%','left':'0%', 'display':'block'});
					else 
						$content.css({'margin-top':'100%','top':'0%', 'display':'block'});
					
					
					var $current = $vtabs.find('.tab-container > .current');
					
					if ($specialtabs.hasClass('horizontal'))
						$current.stop().animate({'margin-left':'100%', opacity:0}, 1000, 'easeInOutExpo', function(){
							$content.css('display','none');
						});
					else 
						$current.stop().animate({'margin-top':'100%', opacity:0}, 1000, 'easeInOutExpo', function(){
							$content.css('display','none');
						});
					
					$vtabs.find('.tab-selector .label.current').add($current).removeClass('current');
					
					if ($specialtabs.hasClass('horizontal'))
						$current.animate({
								'margin-left': '-100%',
								opacity: 0
							}, 1000, 'easeInOutExpo', function(){
								$current.css({'margin-left':'100%'});
							});
					else 
						$current.animate({
								'margin-top': '-100%',
								opacity: 0
							}, 1000, 'easeInOutExpo', function(){
								$current.css({'margin-top':'100%'});
							});
					
					$label.addClass('current').css('color', window.skudoOptions.styleColor);
					jQuery('.vc_verticaltabs .tab-container > .content.'+$label.attr('class').replace('label','').replace('ui-sortable-handle','').replace('current','').trim(),window.parent.frames[0].document).addClass('current').siblings().removeClass('current');
					$content.css('display','block');
					
					if ($specialtabs.hasClass('horizontal')){
						$content.addClass('current').stop().animate({ 'margin-left': '0%', opacity:1 },1000, 'easeInOutExpo', function(){
								jQuery(this).css('display','block');
								if (jQuery(this).find('.services-graph').length){
									var id = jQuery(this).find('.services-graph').attr('id');
									sliding_horizontal_graph(id,3000);
								}
							}).siblings().removeClass('current');
					} else {
						$content.addClass('current').stop().animate({ 'margin-top': '0%', opacity:1 },1000, 'easeInOutExpo', function(){
								jQuery(this).css('display','block');
								if (jQuery(this).find('.services-graph').length){
									var id = jQuery(this).find('.services-graph').attr('id');
									sliding_horizontal_graph(id,3000);
								}
							}).siblings().removeClass('current');
					}
					
					$specialtabs.find('.vtabs_hover_helper').removeClass('vtabs_hover_helper');
					
					var $relTo = $label;
					if ($label.find('.skudo_icon_special_tabs').length&&$label.find('.skudo_icon_special_tabs').outerWidth()>$label.outerWidth())
						$relTo = $label.find('.skudo_icon_special_tabs');
					jQuery('.vc_verticaltab[data-model-id="'+$label.attr('class').replace('label','').replace('ui-sortable-handle','').replace('current','').trim()+'"] > .vc_controls-container.vc_controls', window.parent.frames[0].document).addClass('vtabs_hover_helper').css({
						position: 'absolute',
						marginLeft: (jQuery(this).children('.vc_controls-out-tl').outerWidth()-$relTo.outerWidth())/-2+'px',
						marginTop: 0,
						left: $relTo.position().left,
						top: $label.position().top
					});
					
				} else {
					var $relTo = $label;
					$label.closest('.vc_verticaltabs').find('.vtabs_hover_helper').removeClass('vtabs_hover_helper');
					if ($label.find('.skudo_icon_special_tabs').length&&$label.find('.skudo_icon_special_tabs').outerWidth()>$label.outerWidth())
						$relTo = $label.find('.skudo_icon_special_tabs');
					jQuery('.vc_verticaltab[data-model-id="'+$label.attr('class').replace('label','').replace('ui-sortable-handle','').replace('current','').trim()+'"] > .vc_controls-container.vc_controls', window.parent.frames[0].document).addClass('vtabs_hover_helper').css({
						position: 'absolute',
						marginLeft: (jQuery(this).children('.vc_controls-out-tl').outerWidth()-$relTo.outerWidth())/-2+'px',
						marginTop: 0,
						left: $relTo.position().left,
						top: $label.position().top
					});
				}
				
				if (!$specialtabs.hasClass('horizontal')) $specialtabs.find('.tab-container').css('min-height', $specialtabs.find('.tab-selector').height());
				else $specialtabs.find('.tab-container').css('min-height', $specialtabs.find('.tab-container .current').height()+10);
				
			});
		});

		var $relTo = jQuery($labels[0]);
		if (jQuery($labels[0]).find('.skudo_icon_special_tabs').length&&jQuery($labels[0]).find('.skudo_icon_special_tabs').outerWidth()>jQuery($labels[0]).outerWidth())
			$relTo = jQuery($labels[0]).find('.skudo_icon_special_tabs');
		jQuery('.vc_verticaltab[data-model-id="'+jQuery($labels[0]).attr('class').replace('label','').replace('ui-sortable-handle','').replace('current','').trim()+'"] > .vc_controls-container.vc_controls', window.parent.frames[0].document).addClass('vtabs_hover_helper').css({
			position: 'absolute',
			marginLeft: (jQuery(this).children('.vc_controls-out-tl').outerWidth()-$relTo.outerWidth())/-2+'px',
			marginTop: 0,
			left: $relTo.position().left,
			top: jQuery($labels[0]).position().top
		});
	}
	
	if ($labels.length==1){ jQuery($labels[0]).trigger('click'); }
}

function upper_check_for_vtabs_changes(){
	/*
		special tabs [intances]
	*/
	window.top.$specialtabs = window.top.vc.shortcodes.where({ shortcode: "verticaltabs" });
	if (Object.keys(window.top.$specialtabs).length && Object.keys(window.top.$specialtabs).length!=Object.keys(window.top.upper_special_tabs).length) {

		//stop the interval
		if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
			window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
			delete window.top.upper_check_for_vtabs_changes_interval;
		}

		var $added = array_diff(window.top.$specialtabs, window.top.upper_special_tabs);
		if (Object.keys($added).length){
			for (var i=0; i<Object.keys($added).length; i++){
				var new_vtab = window.top.vc.shortcodes.where({
					shortcode : 'verticaltab',
					parent_id : $added[Object.keys($added)[i]].id
				})[0];
				
				window.new_vtabs_id_aux = $added[Object.keys($added)[i]].id;
				window.top.newrow = window.top.vc.shortcodes.create({shortcode: 'vc_row_inner', parent_id: new_vtab.id });
				window.top.newcolumn = window.top.vc.shortcodes.create({shortcode: 'vc_column_inner', parent_id:window.top.newrow.id, params:{width:'1/1'}});
				
				window.top.vc.builder.update( window.top.newrow );
				var wait_for_row = setInterval(function(){
					if (jQuery('.vc_vc_row_inner[data-model-id="'+window.top.newrow.id+'"]', window.parent.frames[0].document).length){
						clearInterval(wait_for_row);
						
						window.top.vc.builder.update( window.top.newcolumn );
						var wait_for_column = setInterval(function(){
							if (jQuery('.vc_vc_column_inner[data-model-id="'+window.top.newcolumn.id+'"]', window.parent.frames[0].document).length){
								clearInterval(wait_for_column);

								upper_special_tabs_handler();
								
								var $labels = jQuery('.vc_verticaltabs[data-model-id="'+window.new_vtabs_id_aux+'"] .tab-selector .label', window.parent.frames[0].document);
								upper_manage_vtabs_labels($labels);
								
								upper_vtabs_add_new_handler(jQuery('.vc_verticaltabs[data-model-id="'+window.new_vtabs_id_aux+'"] .special_tabs'), window.parent.frames[0].document);
								
								if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
									window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
									delete window.top.upper_check_for_vtabs_changes_interval;
								}
								
								//if ($labels.length==1) $labels[0].trigger('click');
								
								upper_check_for_vtabs_changes();
								window.top.upper_check_for_vtabs_changes_interval = window.top.setInterval(function(){
									window.top.upper_check_for_vtabs_changes();
								}, 2000);
							} 
							
						},100);
						
					}
				}, 100);
				
				// remover o empty. causa confusão com a inner column. chutar fora.
				setTimeout(function(){ 
					jQuery('.vc_verticaltab.vc_empty[data-model-id="'+new_vtab.id+'"] > .vc_controls', window.parent.frames[0].document).removeClass('vc_empty-element'); 
					// initialize the awesome tricks.
					upper_special_tabs_handler();
					
					$labels = jQuery('.vc_verticaltabs[data-model-id="'+window.new_vtabs_id_aux+'"] .tab-selector .label', window.parent.frames[0].document);
					upper_manage_vtabs_labels($labels);
					
					//alert('clone vtabs');
					upper_vtabs_add_new_handler(jQuery('.vc_verticaltabs[data-model-id="'+window.new_vtabs_id_aux+'"] .special_tabs'), window.parent.frames[0].document);
					
				}, 1000);
				
				//reset the interval
				if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
					window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
					delete window.top.upper_check_for_vtabs_changes_interval;
				}
				window.top.upper_check_for_vtabs_changes_interval = window.top.setInterval(function(){
					window.top.upper_check_for_vtabs_changes();
				}, 2000);
				
			}
		}
			
		//reset the comparison
		window.top.upper_special_tabs = window.top.vc.shortcodes.where({ shortcode: "verticaltabs" });
	}
	
	
	/*
		vertical tab [singular]
	*/
	// new state of things. compare to the current.
	window.top.$vtabs = window.top.vc.shortcodes.where({ shortcode: 'verticaltab' });
	if (Object.keys(window.top.$vtabs).length && Object.keys(window.top.$vtabs).length!=Object.keys(window.top.upper_vtabs).length) {

		//stop the interval
		if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
			window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
			delete window.top.upper_check_for_vtabs_changes_interval;
		}
		
		// in with the new
		var $adds = array_diff(window.top.$vtabs, window.top.upper_vtabs);
		if (Object.keys($adds).length){
			//alert('add new');
			for (var i=0; i<Object.keys($adds).length; i++) {
				
				var $parent = jQuery('.vc_verticaltabs[data-model-id="'+$adds[Object.keys($adds)[i]].attributes.parent_id+'"] .special_tabs', window.parent.frames[0].document),
					$son_label = jQuery('.vc_verticaltab[data-model-id="'+$adds[Object.keys($adds)[i]].id+'"] > .label', window.parent.frames[0].document),
					$son_content = jQuery('.vc_verticaltab[data-model-id="'+$adds[Object.keys($adds)[i]].id+'"] > .content', window.parent.frames[0].document);
				
				var this_elem = window.top.vc.shortcodes.where({ id:$adds[Object.keys($adds)[i]].id })[0];
			
				if (typeof this_elem.attributes.cloned != "undefined" && this_elem.attributes.cloned == true){
					$parent.find('.tab-selector .label.'+this_elem.attributes.cloned_from.id).after($son_label);
					$parent.find('.tab-container .content.'+this_elem.attributes.cloned_from.id).after($son_content);
				} else {
					if ($parent.find('.labels-container').length) $labels.appendTo($parent.find('.tab-selector .labels-container'));
					else $son_label.appendTo($parent.find('.tab-selector'));
					$son_content.appendTo($parent.find('.tab-container'));
				}

				upper_manage_vtabs_labels( jQuery('.special_tabs .tab-selector .label', window.parent.frames[0].document) );
				upper_update_vtabs_order($parent);
			}
		}
		//out with the old
		var $removes = array_diff(window.top.upper_vtabs, window.top.$vtabs);
		if (Object.keys($removes).length){
			for (var i=0; i<Object.keys($removes).length; i++) {
				var $parent = jQuery('.vc_verticaltabs[data-model-id="'+$removes[Object.keys($removes)[i]].attributes.parent_id+'"] .special_tabs', window.parent.frames[0].document)
					$son_label = jQuery('.vc_verticaltabs[data-model-id="'+$removes[Object.keys($removes)[i]].attributes.parent_id+'"] .tab-selector > .label.'+$removes[Object.keys($removes)[i]].id, window.parent.frames[0].document),
					$son_content = jQuery('.vc_verticaltabs[data-model-id="'+$removes[Object.keys($removes)[i]].attributes.parent_id+'"] .tab-container > .content.'+$removes[Object.keys($removes)[i]].id, window.parent.frames[0].document);
				
				if ($son_content.hasClass('current')){
					$son_label.remove();
					$son_content.remove();
					jQuery($parent, window.parent.frames[0].document).find('.tab-selector .label').eq(0).trigger('click');
				} else {
					$son_label.remove();
					$son_content.remove();
				}
			}
		}
		//reset the comparison
		window.top.upper_vtabs = window.top.$vtabs;
		
		//reset the interval
		if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
			window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
			delete window.top.upper_check_for_vtabs_changes_interval;
		}
		window.top.upper_check_for_vtabs_changes_interval = window.top.setInterval(function(){
			window.top.upper_check_for_vtabs_changes();
		}, 2000);
	}
	
	// check for edits on singular vtab.
	// can not be empty or it will fire on adding a new vertical tabs instance.
	jQuery('.vc_verticaltab:not(.vc_empty)',window.parent.frames[0].document).each(function(){
		if (jQuery(this).children().length > 1){
			if (jQuery(this).closest('.special_tabs').find('.tab-selector .label.'+jQuery(this).data('model-id')).length){
				//update
				//reset classes accordingly to the vtab model-id
				jQuery(this).children('.label').attr('class', 'label '+jQuery(this).data('model-id'));
				jQuery(this).children('.content').attr('class', 'content '+jQuery(this).data('model-id'));
				
				//update label
				jQuery(this).closest('.special_tabs').find('.tab-selector .label.'+jQuery(this).data('model-id')).after(jQuery(this).children('.label'));
				jQuery(this).closest('.special_tabs').find('.tab-selector .label.'+jQuery(this).data('model-id')).eq(0).remove();
				upper_manage_vtabs_labels( jQuery(this).closest('.special_tabs').find('.tab-selector .label.'+jQuery(this).data('model-id')) );

				//update content
				jQuery(this).closest('.special_tabs').find('.tab-container > .content.'+jQuery(this).data('model-id')).after(jQuery(this).children('.content'));
				jQuery(this).closest('.special_tabs').find('.tab-container > .content.'+jQuery(this).data('model-id')).eq(0).remove();
				
			} else {
				//add label
				var this_elem = window.top.vc.shortcodes.where({ id:jQuery(this).data('model-id') })[0];
				
				if (typeof this_elem.attributes.cloned != "undefined" && this_elem.attributes.cloned == true){
					//from clone.
					jQuery(this).closest('.special_tabs').find('.tab-selector .label.'+this_elem.attributes.cloned_from.id).after( jQuery(this).find('.label') );
					jQuery(this).closest('.special_tabs').find('.tab-container .content.'+this_elem.attributes.cloned_from.id).after( jQuery(this).children('.content') );
				} else {
					if (this_elem.view.$el.hasClass('prepend')){
						if (jQuery(this).closest('.special_tabs').find('.tab-selector .labels-container').length){
							jQuery(this).children('.label').prependTo(jQuery(this).closest('.special_tabs').find('.tab-selector .labels-container'));
						} else {
							jQuery(this).children('.label').prependTo(jQuery(this).closest('.special_tabs').find('.tab-selector'));
						}
						
						jQuery(this).children('.content').prependTo(jQuery(this).closest('.special_tabs').find('.tab-container'));
						
						// important todo this before passing it to the upper_manage_vtabs_labels function !
						jQuery(this).siblings('.vc_verticaltab').eq(0).before(jQuery(this).removeClass('prepend')); 
						
					} else {
						if (jQuery(this).closest('.special_tabs').find('.tab-selector .labels-container').length){
							jQuery(this).children('.label').appendTo(jQuery(this).closest('.special_tabs').find('.tab-selector .labels-container'));
						} else {
							jQuery(this).children('.label').appendTo(jQuery(this).closest('.special_tabs').find('.tab-selector'));
						}
						jQuery(this).children('.content').appendTo(jQuery(this).closest('.special_tabs').find('.tab-container'));
					}
				}
			}
			//reset the comparison
			upper_manage_vtabs_labels( jQuery('.special_tabs .tab-selector .label', window.parent.frames[0].document) );
			
			upper_update_vtabs_order(jQuery(this).closest('.special_tabs'));
		}
	});
	
	//check for edits on [plural] vtabs.
	jQuery('.special_tabs', window.parent.frames[0].document).each(function(){
		if (jQuery(this).children('.tab-selector').length > 1){
			// vtabs edit
			//alert('vtabs edit');
			var labels_classes = jQuery(this).find('.tab-selector:empty').attr('class'),
				labels_styles = jQuery(this).find('.tab-selector:empty').attr('style'),
				contents_classes = jQuery(this).find('.tab-container:empty').attr('class'),
				contents_styles = jQuery(this).find('.tab-container:empty').attr('style');
			
			jQuery(this).find('.tab-selector:empty').remove();
			jQuery(this).find('.tab-container:empty').remove();
			jQuery(this).children('.tab-selector').attr('class',labels_classes).attr('style',labels_styles).find('.labels-container').removeAttr('style').children('.label').removeClass('current');
			jQuery(this).find('.tab-container').attr('class',contents_classes).attr('style',contents_styles).children('.content').removeClass('current').removeAttr('style');
			
			if (jQuery(this).hasClass('horizontal')) {
				//console.log('é horizontal');
				jQuery(this).find('.tab-selector .labels-container').attr('style','display: inline-block; margin: 0px auto;');
			} else {
				//console.log('não é horizontal');
				jQuery(this).find('.tab-selector').removeAttr('style').find('.label-container').removeAttr('style');
			}
			
			upper_special_tabs_handler();

			$labels = jQuery(this).find('.tab-selector .label', window.parent.frames[0].document);
			upper_manage_vtabs_labels($labels);
			
			jQuery($labels[0]).trigger('click');
			
			upper_vtabs_add_new_handler(jQuery(this));
			
			if (typeof window.top.upper_check_for_vtabs_changes_interval != "undefined") {
				window.top.clearInterval(window.top.upper_check_for_vtabs_changes_interval);
				delete window.top.upper_check_for_vtabs_changes_interval;
			}
			upper_check_for_vtabs_changes();
			window.top.upper_check_for_vtabs_changes_interval = window.top.setInterval(function(){
				window.top.upper_check_for_vtabs_changes();
			}, 2000);
			
		}
	});
	
}

function upper_update_vtabs_order($vtabs){

	setTimeout(function(){
		if (!$vtabs.length) return;
		$vtabs.find('.tab-selector .label').each(function (index) {
			window.top.this_shortcode = window.top.vc.shortcodes.where({ id : jQuery(this).attr('class').replace('label ','').replace('ui-sortable-handle','').replace('prepend','').replace('current ','').trim() });
			if (typeof window.top.this_shortcode[0] != "undefined"){
				var new_order = parseInt(jQuery(this).index() + 20,10);
				window.top.this_shortcode[0].save({'order':new_order}); // Optimize
				delete window.top.this_shortcode;
			}
		});
		$vtabs.find('.tab-selector .label.current').trigger('click');
	}, 2000);
	
	
}

function upper_guidGenerator() {
	var S4 = function() {
		return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
	};
	return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4());
}