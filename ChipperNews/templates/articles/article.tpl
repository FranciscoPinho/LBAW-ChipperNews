<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Page</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Converter.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Editor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Sanitizer.js"></script>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-article.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>

	<style>
    .wmd-button > span {
        background-image: 
          url('//cdn.rawgit.com/derobins/wmd/master/images/wmd-buttons.png');
        background-repeat: no-repeat;
        background-position: 0px 0px;
        width: 20px;
        height: 20px;
        display: inline-block;
    }
	</style>
</head>

	<div id="bg">
			<img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
		</div>
<div class="container article-snip" id="article-snip-5">
		<br>
		<h2 id="archived"><a href=# style="color:grey;text-decoration:none;" id="articleAnchor">3 Reasons why Javascript is setting the world on fire</a></h3>
			<h6>By <a style="color:black; font-style:italic">Theodore Reesevolts Moronson</a> 2/5/2013</h6>
			<span class="label label-info" style="background-color:grey">Archived</span>
			<span class="label label-info">Programming</span>
			<h3>It may not be the cleanest language but it's surely useful</h3>
			<div id="ratings4">
					<span id="postext4" style="color:#357266">5023</span>
					<button type="button" class="btn btn-default btn-circle btnlike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4" style="color:#f11066">621</span>
					<button type="button" class="btn btn-default btn-circle btndislike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>

					<script>
						$('#ratings4').find('.btn.btn-default.btn-circle.btnlike').on("click", function () {

							if ($('#ratings4').find('.btn.btn-default.btn-circle.btndislike').is(":disabled")) {
								$('#ratings4').find('.btn.btn-default.btn-circle.btndislike').prop("disabled", false);
								$('span#postext4').empty();
								$('span#postext4').append('5023');
							} else {
								$('#ratings4').find('.btn.btn-default.btn-circle.btndislike').prop("disabled", true);
								$('span#postext4').empty();
								$('span#postext4').append('5024');
							}
						});

						$('#ratings4').find('.btn.btn-default.btn-circle.btndislike').on("click", function () {

							if ($('#ratings4').find('.btn.btn-default.btn-circle.btnlike').is(":disabled")) {
								$('#ratings4').find('.btn.btn-default.btn-circle.btnlike').prop("disabled", false);
								$('span#negtext4').empty();
								$('span#negtext4').append('621');
							} else {
								$('#ratings4').find('.btn.btn-default.btn-circle.btnlike').prop("disabled", true);
								$('span#negtext4').empty();
								$('span#negtext4').append('622');
							}
						});
					</script>
			</div>
			<br>
			<div id="article-body-5">
						<div class="container" style=" width: 40%; height: 30%; margin-bottom:5%">
			<img src="img\javascript.jpg" alt="..." style=" width: 100%; height: auto; border-radius:5%">
		</div>
				<p>There are a couple of reasons:</p>
				<p>&emsp;1.Web is the dominant platform and you can find web enabled devices everywhere. And as you know JavaScript is a vital part of it.</p>
				<p>&emsp;2.Node.js helped to pave way towards JavaScript on the backend. It has become hugely popular.</p>
				<p>&emsp;3.npm, Node's package manager, has contributed towards this development. As a result it has become the most popular package manager out there.</p>
				<p>This isn't an exhaustive list but from my perspective these are the dominant factors. Just the fact that JavaScript is so popular keeps on making it more popular. As a result I expect it will sustain its popularity for a long time to come.</p>
				<br>
			</div>
</div>

	 
	     <div class="row">
    
    <div class="col-md-6 col-md-offset-3">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form >
										<div id="wmd-button-bar"></div>
							<textarea id="wmd-input" class="wmd-input"></textarea>
							
							
										<ul>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
										</ul>
										<button type="submit" class="btn btn-success" style="background-color:#357266"> Submit</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
	</div>
     
    <div class="container comment-main-level"style="height:300px; margin-top:20%">
		<h1 class="nf" style="padding-left:0; border-bottom:solid 1px">Comment Preview</h1>
		<div id="wmd-preview" class="wmd-panel wmd-preview" style="width:100%; margin:0;"></div>
		
		</div>
	</div>
	 <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span> 
		</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a href="#" onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a href="#" onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a href="#" onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a href="#" onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>
            </div>
        </div>
	


