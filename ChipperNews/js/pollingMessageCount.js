// REPLACE 9 WITH REAL VALUE
(function poll() {
   setTimeout(function() {
       $.ajax({ 
           url: $("#base_url").text() + "actions/users/count_messages.php", 
           type: 'POST',
           data:"sender_id=" + encodeURI(9),
           complete:poll,
           success: mycallback });
    }, 1000);
})();

function mycallback(data){
    console.log(data);
}
