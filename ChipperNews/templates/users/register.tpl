<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-forms.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://www.w3schools.com/lib/w3data.js"></script>
  <script src="{$BASE_URL}js/bootstrap.min.js"></script>
   <script src="{$BASE_URL}js/main.js"></script>
  <!-- Optional Bootstrap theme -->
  <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<div id="bg">
  <img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
</div>


  {block name=content}
  <div class="ink-grid content-drawer">
    <form action="{$BASE_URL}actions/users/register.php" class="ink-form ink-formvalidator xlarge-60 large-70 medium-90 all-100 push-center quarter-vertical-padding"
      enctype="multipart/form-data" method="post" data-lang="en_GB">
      {include file='users/register-form.tpl'}
    </form>
  </div>
  <div id="error_messages">
                            {foreach $ERROR_MESSAGES as $error}
                            <div class="error">{$error}<a class="close" href="#">X</a></div>
                            {/foreach}
                            </div>
                            <div id="success_messages">
                            {foreach $SUCCESS_MESSAGES as $success}
                            <div class="success">{$success}<a class="close" href="#">X</a></div>
                            {/foreach}
                            </div>
  {/block} {block name=footer} {/block}