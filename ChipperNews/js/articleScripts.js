var classname = document.getElementsByClassName("categorySearch");
window.onload = function()
{
    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', getArticlesByCategory, false);
    }
}
var getArticlesByCategory = function() {
    var attribute = this.getAttribute("cat");
    alert(attribute);
};
