/**
 * Created by dom on 02.10.2016.
 */

var ProductUtil = {


    createProductListView : function(pResult, pLocation, pResponsive) {

        var lImageString = "http://web39.s75.goserver.host/fyf2/files/pro_theme/images/holder-camera.png";

        if (typeof(pResult.productImages[0]) != 'undefined' && pResult.productImages[0] != null)
        {
            lImageString = '/fyfdata/web/uploads/productImages/' +pResult.productImages[0].filepath;
        }

        var lColString ="";
        if(pResponsive) {
            lColString = "col-md-3 col-sm-4 col-xs-12";
        }


        var lString = '<div class="resultItem ' + lColString + '"><div class="resultWrapper">' +
        '<div class="imageContainer"><a href="/fyf2/index.php/produktdetailseite.html?id='+pResult.id+'"><img class="productImage" src="' + lImageString  + '" /></a>';

        if (typeof(pLocation) != 'undefined' && pLocation != null)
        {
            lString = lString +      '<div class="imageOverlay">' +
                '<span class="hofgut">' + pLocation.company + '</span><span class="resultCity">'
                + pLocation.city
                + '</span></div>';
        }

        lString = lString + '</div><div class="resultContent"><span class="name"><a href="/fyf2/index.php/produktdetailseite.html?id='+pResult.id+'">'
        + pResult.name
        + '</a></span><span class="priceSpan">'
        + pResult.price
        + '€ /&nbsp;</span><span class="piecesSpan">'
        + pResult.quantity
        + pResult.quantityCategory + '</span>'
        + '<span class="description">' + pResult.shortDescription + '</span>'
        + '</div> </div></div>';

return lString;
    }


};

