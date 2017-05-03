function columnClick(catID) {	
	switch (catID) {
		case '1':
		element = document.getElementById(`progtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '2':
		element = document.getElementById(`hardtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '3':
		element = document.getElementById(`softtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '4':
		element = document.getElementById(`indtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
		case '5':
		element = document.getElementById(`techtable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
        case '6':
		element = document.getElementById(`othertable`);
		if($(element).is(":visible"))
		$(element).hide();
		else $(element).show();
		break;
	}
}