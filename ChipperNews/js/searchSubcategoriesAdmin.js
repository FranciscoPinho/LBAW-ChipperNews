function searchSubcategory()
{
    var searchQuery = $('#search_text').val();
    var base_url = $("#base_url").text();
    $.ajax({
        type: "POST",
        url: base_url + "/actions/administration/searchSubcategories.php",
        data: "search_name=" + encodeURI(searchQuery),
        success: renderSearch
    });
    return false;
}
function renderSearch(data)
{
    console.log(data);
    $('#cat_area').empty();
     $('#cat_area').html(data);

}