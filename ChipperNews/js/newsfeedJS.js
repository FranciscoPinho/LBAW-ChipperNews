function changeDropdown(option) {
	$('span.droptext').empty();
	$('span.droptext').append(option);
	switch (option) {
		case 'Me':
			break;
		case 'Mixed':
			break;
		case 'Friends':
			break;
		case 'Newest':
			sortArticles("newest");
			break;
		case 'Oldest':
			sortArticles("oldest");
			break;
		case 'Popular':
			sortArticles("popular");
			break;
		case 'Controversial':
			sortArticles("controversial");
			break;
	}
}
function sortArticles(type)
{
    var base_url = $("#base_url").text();
    return $.ajax({
        type: "POST",
        url: base_url + "/actions/articles/getSortedArticles.php",
        data:  "&type=" + encodeURI(type),
        success: renderArticles
    });
}
function renderArticles(data)
{
	console.log(data);
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