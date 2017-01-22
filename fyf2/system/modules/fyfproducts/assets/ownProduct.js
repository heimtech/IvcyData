/*
 * https://community.contao.org/de/showthread.php?63106-DB-Query-aufgrund-FE-User-Eingaben-erstellen&highlight=ajax
http://blog.barres-it-entwicklung.de/contao-3-1-und-extension-simple_ajax-ein-beispiel/
 */

var OwnProduct = {

	fillProductViewCallback : function(result) {

		tags = $.parseJSON(result);

		var pResult = tags[0];

		if (pResult.name != "") {

			$("#imageContainer").empty();

			for (var i = 0; i < pResult.productImages.length; i++)

			{
				
				
				var lString = "<img src='/fyfdata/web/uploads/productImages/"
					+ pResult.productImages[i].filepath
					+ "' data-medium-img='/fyfdata/web/uploads/productImages/"
					+ pResult.productImages[i].filepath
					+ "' data-big-img='/fyfdata/web/uploads/productImages/"
					+ pResult.productImages[i].filepath
					+ "' data-title='' alt='' />";
				
				
				$("#imageContainer")
						.append(lString);
			}
			
			$(".eagle-gallery").eagleGallery({
				 openGalleryStyle: 'transform',
				    changeMediumStyle: true,
				    theme: 'dark'
			});

			$("#productTitle").text(pResult.name);
			$("#productShortDescription").text(pResult.shortDescription);

			
			$("#productDescription")
					.text(pResult.description);
			$("#productPrice").text(pResult.price + "€ / " + pResult.quantity + pResult.quantityCategory );
		}

	},

	getSingleProduct : function() {

		var dataContainer = productData;

		ProductController.getSingleProduct(dataContainer,
				this.fillProductViewCallback)

	},sendMessage : function() {

		
	
		var lInfo1 =  $(".info1").val();
		var lInfo2 = $(".info2").val();
		var lInfo3 = $(".info3").val();
		

		var lMessage = $("#message").val();
		
		var dataContainer = {
				
				sender : userID,
				productID : productID,
				info1 : lInfo1,
				info2 : lInfo2,
				info3 : lInfo3,
				message : lMessage
				
				
		}

		ProductController.createMessage(dataContainer,
				this.interesseBekundenCallback)

	},interesseBekundenCallback : function() {
		
		$('.inviContainer').toggle();

		
		
		$.toast({
		    text: 'Ihre Nachricht wurde an den Erzeuger gesendet', // Text that is to be shown in the toast
		    heading: 'Vielen Dank', // Optional heading to be shown on the toast
		    icon: 'info', // Type of toast icon
		    showHideTransition: 'fade', // fade, slide or plain
		    allowToastClose: true, // Boolean value true or false
		    hideAfter: 5000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
		    stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
		    position: 'mid-center', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
		    
		    textAlign: 'left',  // Text alignment i.e. left, right or center
		    loader: true,  // Whether to show loader or not. True by default
		    loaderBg: '#9EC600',  // Background color of the toast loader
		    beforeShow: function () {}, // will be triggered before the toast is shown
		    afterShown: function () {}, // will be triggered after the toat has been shown
		    beforeHide: function () {}, // will be triggered before the toast gets hidden
		    afterHidden: function () {}  // will be triggered after the toast has been hidden
		});
	},
	initInteresseBekunden : function() {

		$("#interesse").click(function() {
			
			
			
		});
	},initShowInterestLink : function() {

		$('.openLightBox').click(function() {
			
			$('.inviContainer').toggle();
			
		});
	},

	init : function() {

		this.getSingleProduct();
		this.initInteresseBekunden();

		this.initShowInterestLink();
		
		if(showInterestLink) {
			$('.openLightBox').show();
		} else {
			$('.openLightBox').hide();
		}
		
	
	}
	
	

};

$(document).ready(function() {
	OwnProduct.init();

});