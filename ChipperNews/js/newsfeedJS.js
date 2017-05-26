function changeDropdown(option) {
	$('span.droptext').empty();
	$('span.droptext').append(option);
	switch (option) {
		case 'Me':
			$('.container.article-snip').show();
			$('.container.article-snip.friend').hide();
			break;
		case 'Mixed':
			$('.container.article-snip.friend').show();
			$('.container.article-snip').show();
			break;
		case 'Friends':
			$('.container.article-snip').hide();
			$('.container.article-snip.friend').show();
			break;
	}
}

function fullStory(snipID) {
	$(`#expand-${snipID}`).hide();
	$(`#article-body-${snipID}`).show();
}

function deflateArticle(snipID) {
	$(`#article-body-${snipID}`).hide();	
	$(`#expand-${snipID}`).show();
}