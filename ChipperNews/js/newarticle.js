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