var indexA = 0;
var indexB = 4;
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
       indexB++;
       getMoreArticles();
   }
});
function getMoreArticles()
{
    var base_url = $("#base_url").text();
    return $.ajax({
        type: "POST",
        url: base_url + "/actions/articles/getIndexedArticles.php",
        data: "indexA=" + encodeURI(indexA) + "&indexB=" + encodeURI(indexB),
        success: renderArticles
    });
}
function renderArticles(data)
{
    var result=data;
    console.log(result);
    $('#articlecheese').empty();
    $('#articlecheese').html(result);
    //$('#articlecheese').append(result); 
}