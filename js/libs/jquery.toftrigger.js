/* - - - - - - - - - - - - - - - - >
TofTrigger
VERSION: 0.0.9	DATE: 2014.1.14
AUTHOR: Tof
INFO: Creates a callback triggered by scrolling the window to a specified global coordinate relative to the viewport.
The trigger markers are relative to the viewport top, vertical-center, or bottom.
- - - - - - - - - - - - - - - - - >

IMPLEMENTATION:
$('.something').toftrigger({
	top: 600,
	marker: 'vertical-center',
	onChange: function(isOn) {
		if(isOn) {
			$('.something').removeClass('off');
		}else{
			$('.something').addClass('off');
		}
	}
});
*/

;(function($, window, document, undefined) {
	
	var pluginName = 'toftrigger';
	
	// markers
	var Marker = {
		TOP: 'top',
		VERTICAL_CENTER: 'vertical-center',
		BOTTOM: 'bottom'
	}
	
	var defaults = {
		top: 0,
		marker: Marker.TOP,
		range: 0,
		isOn: false,
		onChange: null
	}
	
	function TofTrigger(element, options) {
		
		var self = this;
		
		// properties
		this.element = element;
		this._factor = 0;
		this._triggers = [];
		
		// overwrite defaults
		this.options = $.extend({}, defaults, options);
		
		
		
		this.init();
	}
	
	TofTrigger.prototype = {
		get factor() {
			return this._factor;
		},
		set factor(f) {
			
		}
	}
	
	TofTrigger.prototype.init = function() {
		var self = this;
		$(window).scroll(function() {
			self.update();
		});
		$(window).resize(function() {
			self.update();
		});
	}
	
	TofTrigger.prototype.update = function() {
		
		var wasOn      = this.options.isOn;
		var lastFactor = this._factor;
		
		this.updateCalculations();
		
		// callback (for ranges)
		if(this.options.range > 0) {
			if(lastFactor != this._factor) {
				this.callOnChange(this.options.isOn);
			}
		// callback (for non-ranges)
		}else{
			if(wasOn != this.options.isOn) {
				this.callOnChange(this.options.isOn);
			}
		}
	}
	
	TofTrigger.prototype.callOnChange = function(isOn) {
		if(this.options.isOn) {
			if(typeof this.options.onChange === 'function') {
				this.options.onChange.apply(this.element, arguments);
			}
		}else{
			if(typeof this.options.onChange === 'function') {
				this.options.onChange.apply(this.element, arguments);
			}
		}
	}
	
	TofTrigger.prototype.updateCalculations = function() {
		
		// vars
		var winWidth  = $(window).width();
		var winHeight = $(window).height();
		var scrollTop = $(window).scrollTop();
		var start     = 0;
		var finish    = 0;
		var dist      = 0;
		var fac       = 0;
		
		// start
		if(this.options.marker == Marker.TOP) {
			start = this.options.top;
		}else if(this.options.marker == Marker.VERTICAL_CENTER) {
			start = this.options.top - Math.round(winHeight / 2);
		}else if(this.options.marker == Marker.BOTTOM) {
			start = this.options.top - winHeight;
		}else{
			console.log('TofTrigger ERROR: Unknown \'marker\' type');
		}
		
		// finish
		finish = start + this.options.range;
		
		// on/off?
		this.options.isOn = (scrollTop >= start);
		
		// calculations
		dist = finish - start;
		fac  = (dist == 0) ? (scrollTop-start) : (scrollTop-start) / dist;
		
		// limit
		if(fac < 0) fac = 0;
		if(fac > 1) fac = 1;
		
		// factor
		this._factor = fac;
	}
	
	// Translates a factor (0.0 - 1.0) from a passed value range.
	TofTrigger.prototype.valueFromFactor = function(min, max) {
		var range = max - min;
		var val = range * this.factor + min;
		return val;
	}
	
	$.fn[pluginName] = function (options) {
		return this.each(function () {
			// prevent multiple instantiations
			var instance = $.data(this, 'plugin_'+pluginName);
			if(instance) {
				//instance.addTrigger(options);
			}else{
				$.data(this, 'plugin_'+pluginName, new TofTrigger(this, options));
			}
		});
	}
})(jQuery, window, document);
