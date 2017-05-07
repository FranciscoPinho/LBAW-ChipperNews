{$comments = fetchComments($article.article_id)}
{if sizeof($comments)>0}
<div class="row">
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
	
<h1 class="nf">Comments</h1>
</div>
  
         {foreach $comments as $comment}
			<div class="container comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="#"></a> {$comment.commenter}</h6>
							<span> {$comment.posted_date}</span>
								<i class="fa fa-reply"></i>
							<i class="fa fa-thumbs-down"></i>
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="comment-content">
                            {$comment.content}
                            {if $comment.sum_score<0}
                            <h5>Votes: <span class="negrating" style="font-weight:bold;color:#f11066"> {$comment.sum_score}</span></h5>
                            {else}
							<h5>Votes: <span class="posrating" style="font-weight:bold;color:#357266"> {$comment.sum_score}</span></h5>
                            {/if}
						</div>
					</div>
			 </div>
        {/foreach}
{/if}
	

			  					