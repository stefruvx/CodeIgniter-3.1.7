$(document).ready(function(){ 	
    $("#search").bind('input propertychange', function(val) {       
		var id = $(this).val();
		$.ajax(
		{type : "POST", url : base_url + "index.php/Search/getRecords", data : { 'searchID' : id}, dataType : "text", cache : false, success : function(data) {
				data = $.parseJSON(data);
				$('#search_table tbody').empty();
				$.each(data, function(i, item) {
					var row = $('<tr>').append(
						$('<td>').text(item.id),
						$('<td>').text(item.fname),
						$('<td>').text(item.lname),
						$('<td>').text(item.phone),
						$('<td>').text(item.email)
					).appendTo('#search_table tbody');
				});
			}
		});
		return false;
	});
 });