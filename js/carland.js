
$(document).ready(function () {

	//search cars
	$('#searchCars').on('click', function (event) {
		event.preventDefault();
		//alert("hello");
		var searchString = $('#searchCarsTxtBx').val();
		//debugger;
		if (searchString && searchString.length != 0) {
			location.href = "search.php?searchString=" + searchString;
		}
	});

	//add remove to/from wishlist
	$('.wishListDiv a').on('click', function(event){
		event.preventDefault();
		//alert("Hello!");
		
	});
});
