/*
 * https://community.contao.org/de/showthread.php?63106-DB-Query-aufgrund-FE-User-Eingaben-erstellen&highlight=ajax
http://blog.barres-it-entwicklung.de/contao-3-1-und-extension-simple_ajax-ein-beispiel/
 */

var UserDash = {

	getOwnProducts : function() {

		
		var dataContainer = {
				
				owner : currentUser
				
		}

		ProductController.getSingleProduct(dataContainer,
				this.ownProductsCallback)

	},getMessagesByRecipient : function(pRecipient) {

		
		var dataContainer = {
				
				recipient : pRecipient
				
		}

		ProductController.getMessages(dataContainer,
				this.ownMessagesCallback)

	},getMessagesBySender : function(pSender) {


		var dataContainer = {

			sender : pSender

		}

		ProductController.getMessages(dataContainer,
			this.ownMessagesCallback)

	}, ownProductsCallback : function(result) {
		
	  	
		tags = $.parseJSON(result);

	

		for (var i = 0; i < tags.length; i++) {

			var pResult = tags[i];

			if (pResult.name != "") {

			$("#myProducts")
						.html(
								$("#myProducts").html() +  ProductUtil.createProductListView(pResult, null, true));

			}
		}
		
	

	
		
	}, ownMessagesCallback : function(result) {
		
	  	
		tags = $.parseJSON(result);

	

		for (var i = 0; i < tags.length; i++) {

			var pResult = tags[i];
			
			var lLocation = MemberController.findLocation(pResult.sender);

		
			$("#myMessageTable")
			.append(
					
							
							'<div class="messageitem"><div class="head"><span class="company">' + lLocation.company +
							'</span></div><div class="product">'  + pResult.product.name + '</div><div class="subject">' +  pResult.info1 +  
							'</div><div class="text">' +  pResult.message +  
							'</div><div class="email"> '+ lLocation.email + '</div></div>');
						
			
		}

		$(".messageitem").click(function() {
			
			
			var lText = $(this).find(".text").text();
			var lSubject = $(this).find(".subject").text();
	
			$("#mySingleMessage").html("<h2>" + lSubject + "</h2><div class='textbody'>" +   lText+  " </div>");
			
			
		});
		
		$(".messageitem")[0].click();
		
	},

	init : function() {
		


		this.getOwnProducts();
		//2 = FARMER
		if(groupID == 2) {
			this.getMessagesByRecipient(currentUser);
		} else if (groupID == 3) {
			this.getMessagesBySender(currentUser);
		}

	    
	
	    
	    
	    
	}
	
	

};

$(document).ready(function() {
	UserDash.init();

});