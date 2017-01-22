var GoogleMap = {

	geocoder : null,
	map : null,
	markers : [],
	
	
	deleteMarkers : function() {
		clearMarkers();
		this.markers = [];
	},

	clearMarkers : function() {
		for (var i = 0; i < this.markers.length; i++) {
			this.markers[i].setMap(null);
		}
	},
	
    initialize : function(divContainer) {
		map = new google.maps.Map(divContainer, {
			zoom : 6,
            maxZoom: 16,
			center : {
				lat : 50.9,
				lng : 10.52
			}, // Denali.
			mapTypeId : 'roadmap'
		});

		geocoder = new google.maps.Geocoder();

		if (navigator.geolocation) {
			browserSupportFlag = true;
			navigator.geolocation.getCurrentPosition(function(position) {

				initialLocation = new google.maps.LatLng(position.coords.latitude,
						position.coords.longitude);
				map.setCenter(initialLocation);
			}, function() {
				//this.handleNoGeolocation(browserSupportFlag);
			});
		}
		// Browser doesn't support Geolocation
		else {
			browserSupportFlag = false;
			this.handleNoGeolocation(browserSupportFlag);
		}
		google.maps.event.trigger(map, 'resize');

	},

	handleNoGeolocation : function(errorFlag) {
		var latLng = new google.maps.LatLng(50.522803, 10.342128);

		map.setCenter(latLng);
	},
	/**
	 * This method ??
	 * 
	 * @returns
	 */
	 setReferencePositionMarker : function() {

		var lValue = $('input[name=radioNearGroup').val();
		if (lValue === "current") {

			if (typeof refMarker === 'undefined') {
				refMarker = new google.maps.Marker({
					position : {
						lat : 50.522803,
						lng : 10.342128
					},
					map : map,
					title : 'Hello World!'
				})

			}

			navigator.geolocation.getCurrentPosition(function(position) {


				refMarker.setPosition(new google.maps.LatLng(
						position.coords.latitude, position.coords.longitude));

			}, function() {
			//	this.handleNoGeolocation(browserSupportFlag);
			});

		}
		if (lValue === "select") {

		}

	},


	/**
	 * sets a single Marker with infowindow on the map by its location
	 */
	
	fitMapToBounds : function() {



		var bounds = new google.maps.LatLngBounds();
		for (var i = 0; i < this.markers.length; i++) {
		 bounds.extend(this.markers[i].getPosition());
		}

		map.fitBounds(bounds);

	},
	setMapMarker : function(pProduct, pLocation) {

		var address = pLocation.street + " " + pLocation.postal + " "
				+ pLocation.city;
		
		
		var markers = this.markers;

		geocoder.geocode({
			'address' : address
		}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK) {

				var lImageString = "http://web39.s75.goserver.host/fyf2/files/pro_theme/images/holder-camera.png";

				if (typeof(pProduct.productImages[0]) != 'undefined' && pProduct.productImages[0] != null)
				{
					lImageString = '/fyfdata/web/uploads/productImages/' +pProduct.productImages[0].filepath;
				}



				var contentString = '<div class="markerContent">'+ ProductUtil.createProductListView(pProduct,pLocation, false)+ '</div>';

				/*
				var contentString = '<div class="markerContent"><div class="productImageContainer"><img class="productImage" src="'
					+ lImageString +'"/></div><div class="productContent"><span class="name"><a href="/fyf2/index.php/produktdetailseite.html?id='+pProduct.id+'">'
					+ pProduct.name
					+ '</a></span>'
						+ '<span class="priceSpan">'
						+ pProduct.price
						+ '€ /&nbsp;</span><span class="piecesSpan">'
						+ pProduct.quantity
						+ pProduct.quantityCategory + '</span>'
						+ '<span class="description">' + pProduct.shortDescription + '</span></div></div>';
						*/

				var infowindow = new google.maps.InfoWindow({
					content : contentString
				});

				var marker = new google.maps.Marker({
					position : results[0].geometry.location,
					map : map,
					title : 'Was soll hier stehen?'
				});

				markers.push(marker);

				marker.addListener('click', function() {
					infowindow.open(map, marker);
				});

				GoogleMap.fitMapToBounds();

				// var marker = new google.maps.Marker({
				// map: map,
				// position:
				// });
			} else {
				
			}
		});



	},  rad : function(x) {
	  return x * Math.PI / 180;
	}, getDistance : function(p1, p2) {
		  var R = 6378137; // Earth’s mean radius in meter
		  var dLat = this.rad(p2.lat() - p1.lat());
		  var dLong = this.rad(p2.lng() - p1.lng());
		  var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
		    Math.cos(this.rad(p1.lat())) * Math.cos(this.rad(p2.lat())) *
		    Math.sin(dLong / 2) * Math.sin(dLong / 2);
		  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
		  var d = R * c;
		  return d; // returns the distance in meter
		},
		
		getDistanceByLocationsByLatLng: function(pLat, pLng, pLocationProductOwner, pResult, pCallback) {
			
			var lThat = this;
			var lCallback = pCallback;
			
			var addressOwner = pLocationProductOwner.street + " " + pLocationProductOwner.postal + " "
			+ pLocationProductOwner.city;
			
			
			var lLatLngOwner = null;
			var lLatLngUser = new google.maps.LatLng(pLat, pLng);



	geocoder.geocode({
		'address' : addressOwner
	}, function(results, status) {
		if (status === google.maps.GeocoderStatus.OK) {
			
			lLatLngOwner = results[0].geometry.location;
			
			
			if(lLatLngOwner != null && lLatLngUser != null) {
				var lDistance = lThat.getDistance(lLatLngOwner, lLatLngUser);
			  pCallback(pResult, lDistance);
			}
			
			
		} else {
			pCallback(pResult, 1);

			}
		});


			
		},
	
	
	getDistanceByLocations: function(pLocationUserInput, pLocationProductOwner, pResult, pCallback) {
		
		var lThat = this;
		var lCallback = pCallback;
		
		var addressOwner = pLocationProductOwner.street + " " + pLocationProductOwner.postal + " "
		+ pLocationProductOwner.city;
		
		
		var lLatLngOwner = null;
		var lLatLngUser = null;



geocoder.geocode({
	'address' : addressOwner
}, function(results, status) {
	if (status === google.maps.GeocoderStatus.OK) {
		
		lLatLngOwner = results[0].geometry.location;
		
		
		if(lLatLngOwner != null && lLatLngUser != null) {
			var lDistance = lThat.getDistance(lLatLngOwner, lLatLngUser);
		  pCallback(pResult, lDistance);
		}
		
		
	} else {
		pCallback(pResult, 1);

		}
	});

		
		var addressUserInput = pLocationUserInput;
		
		geocoder.geocode({
			'address' : addressUserInput
		}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK) {
				
				
				lLatLngUser = results[0].geometry.location;
				
				if(lLatLngOwner != null && lLatLngUser != null) {
					
					var lDistance = lThat.getDistance(lLatLngOwner, lLatLngUser);
					pCallback(pResult, lDistance);
				}


                  // pCallback(pResult, results[0].geometry.location);

	

				// var marker = new google.maps.Marker({
				// map: map,
				// position:
				// });
			} else {
				
				pCallback(pResult, 1);
				
			}
		});	
		
	}

}



