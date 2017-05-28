var BASEURL = $("#base_url").text();
(function poll() {
    return $.ajax({
        url: BASEURL +"/LBAW-ChipperNews/ChipperNews/actions/users/countMessages.php",
        type: "POST",
        data: "sender_id=" + encodeURI(9),
        success: function(data) {
            console.log(data);
        },
        complete: setTimeout(function() {poll()}, 5000),
        timeout: 2000
    })
})();