<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Article Page</title>

  <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-forms.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>
  <script src="{$BASE_URL}js/newarticle.js"></script>
    <link href="https://cdn.quilljs.com/1.2.4/quill.snow.css" rel="stylesheet">
   <script src="https://cdn.quilljs.com/1.2.4/quill.min.js" type="text/javascript"></script>

</head>
<div id="bg">
  <img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
</div>

  <body>
  {block name=content}

    <form action="{$BASE_URL}actions/articles/newarticle.php" class="form-horizontal" id="form-new-article"
      enctype="multipart/form-data" method="post" data-lang="en_GB" >
      {include file='articles/newarticle-form.tpl'}
    </form>

  {/block} 
  </body>
