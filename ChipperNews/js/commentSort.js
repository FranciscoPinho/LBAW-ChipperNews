function changeDropdown(option) {
	$('span.droptext').empty();
	$('span.droptext').append(option);
	switch (option) {
		case 'Newest':
			sortComments("newest");
			break;
		case 'Oldest':
			sortComments("oldest");
			break;
		case 'Popular':
			sortComments("popular");
			break;
		case 'Controversial':
			sortComments("controversial");
			break;
	}
}

function sortComments(type)
{
    var article_id = $("#article_id").text();
    var base_url = $("#base_url").text();
    return $.ajax({
        type: "POST",
        url: base_url + "/actions/articles/getSortedComments.php",
        data: "type=" + encodeURI(type) + "&article_id=" + encodeURI(article_id),
        success: updateCommentSection2
    });
}

  function updateCommentSection2(data) {
                        
                        if (data == "-1") {
                            console.log('Unset variables sent through request');
                            return;
                        } 
                        if (data == "-2") {
                            console.log('Database procedure failed');
                            return;
                        }   
            $('#comment_section').empty();
            $('#comment_section').append(data);   
}