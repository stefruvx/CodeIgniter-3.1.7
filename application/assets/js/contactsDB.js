$(document).ready(function(){
	var id = {};
	id['.fname'] = "first name";
	id['.lname'] = "last name";
	id['.phone'] = "phone number";
	id['.email'] = "email";
	$.each(id, function(index, title_value) {
		$(index).editable({ajaxOptions: { type: 'post', dataType: 'json'},
			type: 'text',
			escape: true,
			url: base_url + "index.php/Contacts/updateRecord",			
			title: 'Enter ' + title_value,
			validate: function(val) { if(!val) return title_value.charAt(0).toUpperCase() + title_value.slice(1) + ' required!'; },
			success: function(response, newValue) {
				if(!response.success) {
					return response.msg;
				}
			}		
		});
	});
 });