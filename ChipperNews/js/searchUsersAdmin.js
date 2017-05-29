
function searchUser()
{
    var searchQuery = $('#search_text').val();
    var base_url = $("#base_url").text();
    $.ajax({
        type: "POST",
        url: base_url + "/actions/users/searchUsers.php",
        data: "search_name=" + encodeURI(searchQuery),
        success: renderSearch
    });
    return false;
}
function renderSearch(data)
{
    console.log(data);
    $('#searchTable').empty();
    $('#moderatorsTable').empty();
    $('#colaboratorsTable').empty();
    $('#usersTable').empty();
    $('#searchTable').html(data);
}