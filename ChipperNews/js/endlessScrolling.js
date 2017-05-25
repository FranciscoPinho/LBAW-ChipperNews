var currentCategory = 0;
var indexA = 3;
var indexB = 6;
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
       indexA = indexB;
       indexB += 3;
       getMoreArticles();
   }
});
function getMoreArticles()
{
    var base_url = $("#base_url").text();
    return $.ajax({
        type: "POST",
        url: base_url + "/actions/articles/getIndexedArticles.php",
        data: "indexA=" + encodeURI(indexA) + "&indexB=" + encodeURI(indexB) + "&categoryID=" + encodeURI(currentCategory),
        success: renderArticles
    });
}
function renderArticles(data)
{
    var result=data;
    //$('#articlecheese').empty();
    //$('#articlecheese').html(result);
    $('#appendArticles').append(result); 
}
var classname = document.getElementsByClassName("categorySearch");
window.onload = function()
{
    getMoreArticles();
    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', getArticlesByCategory, false);
    }
}
var getArticlesByCategory = function() {
    var attribute = this.getAttribute("cat");
    currentCategory = attribute;
    indexA = 0;
    indexB = 4;
    $('#appendArticles').empty();
    getMoreArticles();
};
