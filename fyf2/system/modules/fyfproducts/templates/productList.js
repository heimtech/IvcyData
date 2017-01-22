/*global jQuery, Handlebars, Router */

var ProductList = {

	init : function() {

		initPriceSlider();
		initDeliveryTimeSlider();
	},
	initPriceSlider : function() {

		$("#priceSlider").slider(
				{
					range : true,
					min : 0,
					max : 5000,
					values : [ 1, 500 ],
					slide : function(event, ui) {
						$("#priceSliderLabel").val(
								"$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
		$("#priceSliderLabel").val(
				"$" + $("#priceSlider").slider("values", 0) + " - $"
						+ $("#priceSlider").slider("values", 1));

	},
	initDeliveryTimeSlider : function() {
		$("#deliveryTimeSlider").slider({
			range : true,
			min : 0,
			max : 20,
			values : [ 1, 500 ],
			slide : function(event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#deliveryTimeSliderLabel").val(
				"$" + $("#deliveryTimeSlider").slider("values", 0) + " - $"
						+ $("#deliveryTimeSlider").slider("values", 1));
	}

};

ProductList.init();
