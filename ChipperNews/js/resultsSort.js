function changeDropdown(option,query) {
	$('span.droptext').empty();
	$('span.droptext').append(option);
	switch (option) {
		case 'Newest':
			sortResults("newest",query);
			break;
		case 'Oldest':
			sortResults("oldest",query);
			break;
		case 'Popular':
			sortResults("popular",query);
			break;
		case 'Controversial':
			sortResults("controversial",query);
			break;
	}
}

function sortResults(type,query)
{
    var base_url = $("#base_url").text();
    return $.ajax({
        type: "POST",
        url: base_url + "/actions/articles/getSortedResults.php",
        data:  "type=" + encodeURI(type) +"&query="+encodeURI(query),
        success: renderResults
    });
}
function renderResults(data)
{
    $('.allcontent').empty();
    $('.allcontent').append(data); 
}
function fullStory(snipID) {
	$(`#expand-${snipID}`).hide();
	$(`#article-body-${snipID}`).show();
}

function deflateArticle(snipID) {
	$(`#article-body-${snipID}`).hide();	
	$(`#expand-${snipID}`).show();
}