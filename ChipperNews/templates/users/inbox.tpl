<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inbox</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-posthistory.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
	<span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}js/main.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>

    <div class=allcontent>
        <div id="bg">
            <img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
        </div>

        <div class="container-fluid" id="postheader">
            <h1 class="nf"> Inbox </h1>
        </div>

        {foreach $messages as $msg}
            <div class="container comment-snip" style="width:60%;min-height:50px;">
                    <div class="mycomment ">
                    <p class="text-center">From: {$msg.username} </p>
                    <div class="caption text-center" style="word-wrap: break-word;"> {$msg.content}</div>
                    </div>
            </div>
         {/foreach}

        <div class="container" style="width:60%">
        <form class="form-horizontal" id="fpassw" method="post" action="{$BASE_URL}actions/users/send.php">
         <fieldset class="responsive-fieldset">
            <div class="form-group">
               <label for="to"> To: <br>  </label>
				<div class="col-sm-12">
                <input type="text" id="receiver" class="form-control"  name="receiver" required>
                </div>
            </div>
         <div class="form-group">
				<label for="from"> From: <br>  </label>
				<div class="col-sm-12">
					<input type="text" id="sender" class="form-control"  name="sender" value="{$USERNAME}" disabled>
				</div>
		</div>
        <div class="form-group">
                        <label>Message:</label>
                         <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="20" id="message" name="message" required></textarea>
                        </div>
                        <div class="col-sm-12">
                        <br><br>
                         </div>
          </div>
                <button class="btn btn-lg btn-success btn-block center-block" style="width:50%"type="submit" value="submit" >Send Message</button>
                <br>
            </fieldset>
        </form>
      
        </div>
          <br>
    </div>
	
<script>

function markRead(user_id)
{
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/users/accept_collabapp.php",
                    data: "user_id=" + encodeURI(user_id),
                    success: updateInbox
                });
}
		
function reload(data){
			location.reload();
}
</script>
</body>



</html>