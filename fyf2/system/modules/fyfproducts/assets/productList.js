/*
 * https://community.contao.org/de/showthread.php?63106-DB-Query-aufgrund-FE-User-Eingaben-erstellen&highlight=ajax
http://blog.barres-it-entwicklung.de/contao-3-1-und-extension-simple_ajax-ein-beispiel/
 */

var ProductList = {
		

	initPriceSlider : function() {

		$("#priceSlider").slider(
				{
					range : true,
					min : 0,
					max : 5000,
					values : [ 1, 500 ],
					slide : function(event, ui) {
						
						$("#priceLow").val(ui.values[0]);
						$("#priceHigh").val(ui.values[1]);
					}
				});
		
		
		
		$("#priceLow, #priceHigh").change(function() {
			
			var lLowVal = $("#priceLow").val();
			var lHighVal = $("#priceHigh").val();

			
			
			$("#priceSlider").slider('values',0,lLowVal);
				$("#priceSlider").slider('values',1,lHighVal);
				   $("#priceSlider").slider("refresh");

			
		});
		
	$("#priceLow").val("1");
	$("#priceHigh").val("50");


	},
	initDeliveryTimeSlider : function() {
		$("#deliveryTimeSlider").slider(
				{
					range : "max",
					value: 3,
					max : 20,
					slide : function(event, ui) {
						
					$("#deliveryTimeSliderLabel").text(
								ui.value);

					
					}
				});
		
			
		$("#deliveryTimeSliderLabel").text(
				"3");

	},
	initExtendedSearch : function() {
		
		$("#searcharea").hide();
		$("#extendedSearch").click(function() {
			$("#extendedSearchContent").slideToggle();
			$("#extendedSearchContent").toggleClass("active");

			google.maps.event.trigger(map, 'resize');
			
			

		});

	},
	initSearchButton : function() {
		$("#searchButton").click(function() {

		});

	}, handleDistanceCalculation : function (pResult, pDistance) {
    	
    	if(pDistance != null) {
    		
    		var lUmkreis =  $("#umkreis").val();
    		if(lUmkreis*1000 >= pDistance) {
    			this.addSingleResultToUI(pResult);
    		}
    		
    		
    	} else {
    		this.addSingleResultToUI(pResult);
    	}
    	
    },handleDistanceCalculationRegio : function (pResult, pDistance) {
    	
    	if(pDistance != null) {
    		
    		
    		if( 250000 >= pDistance) {
    			this.addSingleResultToRegioUI(pResult);
    		}
    		
    		
    	} else {
    		this.addSingleResultToUI(pResult);
    	}
    	
    },   fillProductsListCallback : function(result) {
    	
    	
		GoogleMap.clearMarkers();
		tags = $.parseJSON(result);

		$("#searchResult").empty();
		
		if(tags.length > 0) {
			
			for (var i = 0; i < tags.length; i++) {

				var pResult = tags[i];
				
				if($("#extendedSearchContent").hasClass("active")) {
		    		
					  if( pResult.name != null && pResult.name != "") {

						var lLocationProductOwner = MemberController.findLocation(pResult.owner);
		    			
						var lThat = this;
						
		    			var lStandortUserInput =  $("#standortSuche").val();
		    			GoogleMap.getDistanceByLocations(lStandortUserInput, lLocationProductOwner, pResult, $.proxy(lThat.handleDistanceCalculation, lThat));
		    			
					  }
		    			
		    				
				} else {
					
					this.addSingleResultToUI(pResult);
				}

		
			}
			

			
			
			$(".foundProductsSpan").text("Gefundene Produkte");
		

			
		} else {
			
			$(".foundProductsSpan").text("Keine Produkte gefunden");
		}

		
	
		$(".foundProducts").show();

		$("#searcharea").show();
		$("#produktliste").show();

		google.maps.event.trigger(map, 'resize');

    	
    }, handleDistanceCalculation : function (pResult, pDistance) {
    	
    	if(pDistance != null) {
    		
    		var lUmkreis =  $("#umkreis").val();
    		if(lUmkreis*1000 >= pDistance) {
    			this.addSingleResultToUI(pResult);
    		}
    		
    		
    	} else {
    		this.addSingleResultToUI(pResult);
    	}
    	
    }, addSingleResultToRegioUI : function (pResult) {
    	
		if (pResult.name != null && pResult.name != "") {

			var lLocation = MemberController.findLocation(pResult.owner);
			
		    var lContainer = $("#regioProductContainer");
		
			$("#regioProductContainer")
					.html(
							$("#regioProductContainer").html() + ProductUtil.createProductListView(pResult, lLocation, true));

		}
    },addSingleResultToUI : function (pResult) {
    	
		if (pResult.name != null && pResult.name != "") {

			var lLocation = MemberController.findLocation(pResult.owner);

			GoogleMap.setMapMarker(pResult, lLocation);

			$("#searchResult")
					.html(
							$("#searchResult").html() +  ProductUtil.createProductListView(pResult, lLocation, true));
		}
    },

    fillProductList : function() {

    	var dataContainer;


    	if($("#extendedSearchContent").hasClass("active")) {
    		
    		dataContainer = {
    				
    				productName: $("#productName").val(),
    				standortSuche: $("#standortSuche").val(),
    				priceLow: $("#priceLow").val(),
    				priceHigh: $("#priceHigh").val(),
    				maxDelivery: $("#deliveryTimeSliderLabel").text(),
    				typeOfDelivery: $("#lieferArt").val(),
    				requestType: "searchProducts"
    				
    		};
    	} else {
    		
    		dataContainer = {
    				
    				productName: $("#productName").val(),
    				requestType: "searchProducts"
    				
    		};
    		
    	}
    	

ProductController.getProducts(dataContainer, $.proxy(this.fillProductsListCallback,this));
	
    	
    },
    
    showRegioProducts: function(position) {
    	
    	   var lLat = position.coords.latitude
    	   var lLong = position.coords.longitude
    	   
       	var dataContainer = {  };
       	
   ProductController.getRegioProducts(dataContainer, $.proxy(this.showRegioProductsCallback,this), lLat, lLong);
    	
    },   showRegioProductsCallback: function(result, pLat, pLong) {
    	
    	
		tags = $.parseJSON(result);
		
		if(tags.length > 0) {
			
			for (var i = 0; i < tags.length; i++) {

				var pResult = tags[i];
							
		    		
					  if( pResult.name != null && pResult.name != "") {

						var lLocationProductOwner = MemberController.findLocation(pResult.owner);
		    			
						var lThat = this;
						
		    			var lStandortUserInput =  $("#standortSuche").val();
		    			GoogleMap.getDistanceByLocationsByLatLng(pLat, pLong, lLocationProductOwner, pResult, $.proxy(lThat.handleDistanceCalculationRegio, lThat));
		    			
					  }
		    			
		    				
				
					
					//this.addSingleResultToRegioUI(pResult);
				

		
			}
		
		

			
		} 
		
	
		$(".regioProducts").show();

	
		
    },
  

	init : function() {

		$("#extendedSearchContent").hide();
		$(".foundProducts").hide();
		this.initPriceSlider();
		this.initDeliveryTimeSlider();
		
		/*
		$(".ownProduct").click(function() {
			
			window.location.href = "/fyf2/index.php/produkterstellung.html";
			
		});
		*/
		 if (navigator.geolocation){
			 
			 
			
		     navigator.geolocation.getCurrentPosition($.proxy(this.showRegioProducts, this), function() {
		    	 $("#regioproducts").hide();
		     });
		 }
		 
	
		
		
		
		this.initExtendedSearch();
		this.initSearchButton();

	}

};

$(document).ready(function() {
	ProductList.init();

	
});