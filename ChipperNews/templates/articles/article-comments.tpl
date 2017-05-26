{$comments = fetchComments($article.article_id)}
<div id="comment_section">
{if sizeof($comments)>0}
<div class="container" id="comment-elements">
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
							{foreach $ratings as $rat}
								{if $rat.comment_id==$comment.comment_id}
									{$rating = $rat}
								{/if}
							{/foreach}
							{if dateDiffDays($article.published_date)>=100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')" disabled></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')" disabled></i>
							{/if}
							{if ($rating==-1 || (isset($rating) && $rating.score==0)) && dateDiffDays($article.published_date)<100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')"></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')"></i>
                    		{/if}
							{if $rating.score==-1 && dateDiffDays($article.published_date)<100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')" style="color:blue" name="blue"></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')" name="grey"></i>
							{/if}
							{if $rating.score==1 && dateDiffDays($article.published_date)<100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')" name="grey"></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')" style="color:blue" name="blue"></i>
							{/if} 
                            {/if}
							{if $smarty.session.permission>=2 || $comment.commenter_id == $smarty.session.user_id}
							<i class="fa fa-trash" aria-hidden="true" onclick="deleteComment('{$comment.comment_id}')"></i>
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
		function deleteComment(comment_id){
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/delete_comment.php",
                    data: "comment_id=" + encodeURI(comment_id) + "&article_id=" + encodeURI(article_id),
                    success: reload
                });
		}
		function reload(data){
			location.reload();
		}
		 function upvote(comment_id) {
                var score;
				 var article_id = $("#article_id").text();
                if ($('#down'+comment_id).attr("name")=="grey")
                    score = 0;
                else score = 1;
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/comment_vote.php",
                    data: "comment_id=" + encodeURI(comment_id) + "&score=" + encodeURI(score) + "&article_id=" + encodeURI(article_id),
                    success: updateCommentSection
                });
		   }
     

        function downvote(comment_id) {
                var score;
				var article_id = $("#article_id").text();
                if ($('#up'+comment_id).attr("name")=="grey")
                    score = 0;
                else score = -1;
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/comment_vote.php",
                    data: "comment_id=" + encodeURI(comment_id) + "&score=" + encodeURI(score)+ "&article_id=" + encodeURI(article_id),
                    success: updateCommentSection
                });
		}

         
		</script>
			  					