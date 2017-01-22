/*
 * https://community.contao.org/de/showthread.php?63106-DB-Query-aufgrund-FE-User-Eingaben-erstellen&highlight=ajax
http://blog.barres-it-entwicklung.de/contao-3-1-und-extension-simple_ajax-ein-beispiel/
 */

var ProductCreate = {

	createProduct : function() {

		$.ajax({
			type : "POST",
			url : "/fyfdata/web/products/create",
			data: new FormData(jQuery('form')[0]),
		    cache: false,
		    contentType: 'multipart/form-data',
		    processData: false,
			success : function(result) {
				tags = $.parseJSON(result);

				if (tags['code'] == "0") // nur als Beispiel
				{
					// ben�tigte Aktionen
					alert(tags["msg"]);
				}
			}
		});
	},
	addImage : function(event) {

		$('<img />', {
			src : URL.createObjectURL(event.target.files[0]),
			width : 300
		}).appendTo($('#imagePreviewGallery'));

		var lSize = $('#imagePreviewGallery').children().size();

		if (lSize >= 5) {
			$('#imageButtonUpload').hide();
		} else {
			$('#imageButtonUpload').show();
		}

	},
	initImageUpload : function(event) {

		$('#imageButtonUpload').click(function(e) {
			e.preventDefault();

			var lSize = $('#imagePreviewGallery').children().size();
			var lSelector = "#uploadImageInput" + (lSize + 1);
			$(lSelector).click();
		});

		$("#uploadImageInput1").hide();
		$("#uploadImageInput2").hide();
		$("#uploadImageInput3").hide();
		$("#uploadImageInput4").hide();
		$("#uploadImageInput5").hide();

	},
	setupValidation : function(event) {

		$("#createForm").validate({
			rules : {
				productName : {
					required : true
				},
				price : {
					required : true,
					number: true
				},
				quantityOfPieces : {
					required : true,
					number: true
				},
				deliveryTime : {
					required : false
				},
				typeOfPackage : {
					required : false,
					
				}

			},
			messages : {
				productName : "Pflichtfeld",
				price : "Pflichtfeld",
				quantityOfPieces : "Pflichtfeld",
				deliveryTime : "Pflichtfeld",
				typeOfPackage : "Pflichtfeld"

			}
		});

	},

	init : function() {

		$("#userID").hide();
		this.initImageUpload();
		this.setupValidation();

		$("#price").change(function() {

			var lVal = $("#price").val();
			var lResult = lVal.replace(/,/g, '.');
			$("#price").val(lResult);

		});

			// bind 'myForm' and provide a simple callback function
			$('#createForm').ajaxForm(function() {


					$.toast({
					text: 'Ihr Produkt wurde ihrem Portfolio hinzugefügt', // Text that is to be shown in the toast
						heading: 'Vielen Dank', // Optional heading to be shown on the toast
						icon: 'info', // Type of toast icon
						showHideTransition: 'fade', // fade, slide or plain
						allowToastClose: true, // Boolean value true or false
						hideAfter: 4000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
						stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
						position: 'top-center', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



						textAlign: 'left',  // Text alignment i.e. left, right or center
						loader: true,  // Whether to show loader or not. True by default
						loaderBg: '#9EC600',  // Background color of the toast loader
						beforeShow: function () {}, // will be triggered before the toast is shown
					afterShown: function () {}, // will be triggered after the toat has been shown
					beforeHide: function () {}, // will be triggered before the toast gets hidden
					afterHidden: function () {}  // will be triggered after the toast has been hidden
				});



			});


	}

}

$(document).ready(function() {
	ProductCreate.init();

});