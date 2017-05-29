function columnClick(catID) {	
	switch (catID) {
		case '1':
		element = $(`#progtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '2':
		element = $(`#hardtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '3':
		element = $(`#softtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '4':
		element = $(`#indtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '5':
		element = $(`#techtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
        case '6':
		element = $(`#othertable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
	}
}

$().ready(function(){
		
			$("#form_register").validate({
				rules:{
					username: "required",
					name: "required",
					password: {
						required: true,
						minlength: 4,
					},
					password2: {
					    required:true,
						minlength: 4,
						equalTo: "#password"
					},
					email: {
						required:true,
						email: true
					}
				 },
				messages: {
					password: {
						required: "A password is required",
						minlength: "at least 4 characters long"
					},
					password2: {
					    required: "pass confirmation required",
						minlength: "at least 4 characters long",
						equalTo: "enter same pass as above"
					}
				}

			});

			$("#apply_collab").validate({
				rules:{
					description: {
						required: true,
						maxlength: 1000
					},
					motivation: {
					    required:true,
						maxlength: 1000
					},
					refs:{
						maxlength: 300
					},
					assoc:{
						maxlength: 300
					}
				 },
				messages: {
					description: {
						required: "Describe yourself",
						minlength: "Cannot exceed 1000 characters"
					},
					motivation: {
					    required:"Explain your motivation",
						minlength: "Cannot exceed 1000 characters"
					},
					refs:{
						minlength: "Cannot exceed 300 characters"
					},
					assoc:{
						minlength: "Cannot exceed 300 characters"
					}
				}

			});
});