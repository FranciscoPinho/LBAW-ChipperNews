<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit article page</title>
      
  <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-forms.css">
  <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/widgEditor.css">
  <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/widgContent.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>
  <script src="{$BASE_URL}js/newarticle.js"></script>
  <script src="{$BASE_URL}js/widgEditor.js"></script>

</head>
<div id="bg">
  <img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
</div>

  <body>
  {block name=content}

    <form action="{$BASE_URL}actions/articles/update.php" class="form-horizontal" id="form-edit-article"
      enctype="multipart/form-data" method="post" data-lang="en_GB" >
      {include file='articles/edit-article-form.tpl'}
    </form>

  {/block} 
  </body>


