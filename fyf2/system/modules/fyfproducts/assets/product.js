

var ProductController = {
		
		
		/**
		 * Receive a list of products from the backend by the search values
		 */
		getProducts : function(pProductValues, callBackMethod) {


			$.ajax({
						type : "POST",
						url : "/fyfdata/web/products/list",
						data : pProductValues,
						success : function(result) {
							
					callBackMethod(result);

						}
					});
		}, getRegioProducts : function(pProductValues, callBackMethod, pLat, pLng) {


			$.ajax({
						type : "POST",
						url : "/fyfdata/web/products/list",
						data : pProductValues,
						success : function(result) {
							
					callBackMethod(result, pLat, pLng);

						}
					});
		},getSingleProduct : function(pProductValues, callBackMethod) {


			$.ajax({
						type : "POST",
						url : "/fyfdata/web/products/list",
						data : pProductValues,
						success : function(result) {
							
					callBackMethod(result);

						}
					});
		},createMessage : function(pMessageValues, callBackMethod) {


			$.ajax({
						type : "POST",
						url : "/fyfdata/web/message/create",
						data : pMessageValues,
						success : function(result) {
							
					callBackMethod(result);

						}
					});
		},getMessages : function(pMessageValues, callBackMethod) {


			$.ajax({
						type : "POST",
						url : "/fyfdata/web/message/list",
						data : pMessageValues,
						success : function(result) {
							
					callBackMethod(result);

						}
					});
		}
		
		
}