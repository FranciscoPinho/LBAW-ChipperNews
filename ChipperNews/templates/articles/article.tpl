<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Page</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-article.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}js/commentSort.js"></script>
    <link href="https://cdn.quilljs.com/1.2.4/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.2.4/quill.min.js" type="text/javascript"></script>
    <span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
    <span id="article_id" hidden>{$article_id}</span>
</head>


<div id="bg">
	<img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
</div>

<div class="container article-snip" id="article-snip-5">
		<br>
        {if $smarty.session.permission==3}
        <button class="btn btn-danger dropdown-toggle pull-right" type="button" id="delete"  onclick="deleteArticle('{$article.article_id}')">Admin Delete Article</button>
        <script>
          function deleteArticle($article_id){
                var article_id = $("#article_id").text();
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/delete.php",
                    data: "article_id=" + encodeURI(article_id),
                    success: frontpage
                });
          }
          function frontpage(){
             var base_url = $("#base_url").text();
              window.location.href = base_url;
          }
         </script>
        {/if}
        {if dateDiffDays($article.published_date)<100 && $article.archived==false}
         {if $smarty.session.user_id==$article.author}
         <a href="{$BASE_URL}pages/articles/edit.php?id={$article.article_id}"><button class="btn btn-default pull-right" type="button" id="edit">Edit</button></a>
         {elseif $smarty.session.permission>=2}
         <a href="{$BASE_URL}pages/articles/edit.php?id={$article.article_id}"><button class="btn btn-default pull-right" type="button" id="mod_edit">Mod Edit</button></a>
         <button class="btn btn-default pull-right" type="button" id="archivebut"  onclick="closeArticle('{$article.article_id}')"><span>Archive Article</span></button>
         
         <script>
          function closeArticle($article_id){
                var article_id = $("#article_id").text();
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/archive.php",
                    data: "article_id=" + encodeURI(article_id),
                    success: reload
                });
          }
          </script>
         {/if}
        <h2 id="headline">{$article.title}</h2>
        {else}
        <h2 id="headline" style="color:grey">Archived: {$article.title}</h2>
        {/if}
			<h6>By <a href="{$BASE_URL}pages/users/viewprofile?id={$article.author}" style="color:black; font-style:italic">{$article.authorname}</a> {$article.published_date}</h6>
            {$subcategories = fetchSubcategories($article.article_id)}
			 {foreach $subcategories as $subart}
                            {if $subart.category==1}
                                <span class="label label-primary ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==2}
                                <span class="label label-warning ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==3}
                                <span class="label label-info ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==4}
                                <span class="label label-default ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==5}
                                <span class="label label-danger ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==6}
                                <span class="label label-success ">{$subart.name}</span>
                            {/if}     
            {/foreach}
			<h3 id="lead">{$article.lead}</h3>
			<div id="ratings">
                    <span id="postext4" style="color:#357266">{$article.posratings}</span> 
                    {if !isset($rating) || dateDiffDays($article.published_date)>=100 || $article.archived==true}
					<button type="button" id="like" class="btn btn-default btn-circle btnlike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066">{$article.negratings}</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    {/if}
                    {if ($rating==-1 || (isset($rating) && $rating.score==0)) && dateDiffDays($article.published_date)<100 && !$article.archived}
					<button type="button" id="like" class="btn btn-default btn-circle btnlike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066">{$article.negratings}</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    {/if}
                    {if $rating.score==-1 && dateDiffDays($article.published_date)<100 && !$article.archived}
					<button type="button" id="like" class="btn btn-default btn-circle btnlike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066">{$article.negratings}</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    {/if}
                    {if $rating.score==1 && dateDiffDays($article.published_date)<100 && !$article.archived}
					<button type="button" id="like" class="btn btn-default btn-circle btnlike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066">{$article.negratings}</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    {/if} 
			</div>
          
            <script>
            $('#like').on('click', function() {
                var score;
                var article_id = $("#article_id").text();

                if ($('#dislike').is(":disabled"))
                    score = 0;
                else score = 1;


                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/vote.php",
                    data: "article_id=" + encodeURI(article_id) + "&score=" + encodeURI(score),
                    success: updateScores
                });
            });

            $('#dislike').click( function() {
                var score;
                var article_id = $("#article_id").text();
                if ($('#like').is(":disabled"))
                    score = 0;
                else score = -1;
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/vote.php",
                    data: "article_id=" + encodeURI(article_id) + "&score=" + encodeURI(score),
                    success: updateScores
                });
            });

            function updateScores(data) {
                console.log(JSON.stringify(data));
                var result=JSON.parse(data);
                if (result == "-1") {
                    console.log('stored procedure failed');
                    return;
                }
                switch (result[0]) {
                    case "1":
                        $('#dislike').prop("disabled", true);
                        break;
                    case "-1":
                        $('#like').prop("disabled", true);
                        break;
                    case "0":
                        $('#dislike').prop("disabled", false);
                        $('#like').prop("disabled", false);
                        break;
                }
                $('span#postext4').empty();
                $('span#negtext4').empty();
                $('span#postext4').append(result[1]);
                $('span#negtext4').append(result[2]);

            }

            </script>
           
			<br>
			<div id="article-body-5">
                <div class="container" style=" width: 40%; height: 30%; margin-bottom:5%">
                    <img src="{$BASE_URL}images\articles\{$article.article_id}" alt="..." style=" width: 100%; height: auto; border-radius:5%">
                </div>
                <div id="content" class="container" style=" width: 100%; height: auto;">
                {$article.content}
                </div>
            </div>		
   </div>
   <br><br>
   {if $USERNAME && dateDiffDays($article.published_date)<100 && !$article.archived}
   <div class="row">
    
    <div class="col-md-6 col-md-offset-3">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form >
										<div id="wmd-button-bar"></div>
                                         <div id="editor-container" style=" min-height: 100px;display: block; clear: both;">
                                         <textarea id="contentstuff"></textarea>
				                        </div>
                                         <input class="form-control"  id="body" type="hidden" name="body" required>
										<button type="button" onclick="submitComment()" class="btn btn-success" style="background-color:#357266"> Submit</button>
									</form>
								</div>
							</div>
	</div>

    
    </div>
                <script>
                var quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                     ['bold', 'italic','underline'],
                     ['link', 'blockquote', 'code-block', 'video'],
                     [{ list: 'ordered' }, { list: 'bullet' }],
                      [{ 'size': ['small', false, 'large', 'huge'] }],  
                      [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                     ]
                },
                theme: 'snow'
                });
                quill.on('text-change', function() {
                  var html = quill.root.innerHTML;
                  var content = document.getElementById('body');
                  content.value = html;
                 });
                 function submitComment(){
                     var content = document.getElementById('body');
                     var base_url = $("#base_url").text();
                     var article_id = $("#article_id").text();
                     return $.ajax({
                        type: "POST",
                        url: base_url + "actions/articles/newcomment.php",
                        data: "article_id=" + encodeURI(article_id) +"&content=" + encodeURI(content.value) ,
                        success: updateCommentSection
                     });
                 }

                     function updateCommentSection(data) {
                        var result=data;
                        console.log(result);
                        if (result == "-1") {
                            console.log('Unset variables sent through request');
                            return;
                        } 
                        if (result == "-2") {
                            console.log('Database procedure failed');
                            return;
                        }   
                        $('#comment_section').empty();
                        $('#comment_section').html(result);   
                     }
                </script>
    {/if}

	


