var MemberController = {


	
	
	findLocation : function(pOwner) {
		for (var i = 0; i < locations.length; i++) {
			if (locations[i].id === pOwner)
				return locations[i]; // Return as soon as the object is found
		}
		return null; // The object was not found
	}

}




