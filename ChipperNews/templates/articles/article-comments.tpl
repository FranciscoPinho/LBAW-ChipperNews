{$comments = fetchComments($article.article_id)}
<div id="comment_section">
{if sizeof($comments)>0}
<div class="container" id="comment-elements">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span> 
		</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a href="#" onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a href="#" onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a href="#" onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a href="#" onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>
<h1 class="nf">Comments</h1>
</div>

         {foreach $comments as $comment}
			<div class="container comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
						{if $comment.commenter_id == $smarty.session.user_id}
							<h6 class="comment-name by-author" ><a style="color:blue;text-decoration:none" href="{$BASE_URL}pages/users/profile.php">{$comment.commenter}</a> </h6>
							{else}
							<h6 class="comment-name by-author"><a style="text-decoration:none" href="{$BASE_URL}pages/users/view_profile.php?id={$comment.commenter_id}">{$comment.commenter}</a> </h6>
							{/if}
							<span> {$comment.posted_date}&nbsp&nbsp&nbsp</span>
								{if $comment.sum_score<0}
								<span class="negrating" style="font-weight:bold;color:#f11066"> {$comment.sum_score}</span>
								{else}
								 <span class="posrating" style="font-weight:bold;color:#357266">+{$comment.sum_score}</span>
								{/if}
							{if $USERNAME && dateDiffDays($article.published_date)<100 &&$comment.commenter_id != $smarty.session.user_id}
							<i class="fa fa-flag" aria-hidden="true" data-toggle="modal"  data-target="#reportModal" onclick="report('{$comment.commenter}','{$comment.commenter_id}','{$comment.content}')"></i>
							<i class="fa fa-thumbs-down"></i>
							<i class="fa fa-thumbs-up"></i>
                            {/if}
						</div>
						<div class="comment-content">
                            {$comment.content}
						</div>
					</div>
			 </div>

        {/foreach}
		
	
		{/if}
</div>	
	<script>
		function quote(commenter){
			var replyTo="Reply: "+"@"+commenter;
			quill.setText(replyTo);
		}
		function report(reported,reported_id,flagged_content){
			$("#reported").val(reported);
			$("#reported_id").val(reported_id);
			cleanText = flagged_content.replace(/<\/?[^>]+(>|$)/g, "");
			cleanText= "Offense: "+"\""+cleanText+"\"";
			$("#description").val(cleanText);
		}
		</script>
			  					