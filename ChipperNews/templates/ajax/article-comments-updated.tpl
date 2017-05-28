{if sizeof($comments)>0}
{foreach $comments as $comment}
			<div class="container comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
					{if $comment.commenter_id == $smarty.session.user_id}	
							<h6 class="comment-name by-author" ><a style="color:blue;text-decoration:none" href="{$BASE_URL}pages/users/profile.php">{$comment.commenter}</a> </h6>
							<span>Myself&nbsp</span>
							{elseif $comment.commenter_id==$article.author}
							<h6 class="comment-name by-author"><a style="color:darkblue;text-decoration:none" href="{$BASE_URL}pages/users/view_profile.php?id={$comment.commenter_id}">{$comment.commenter}</a> </h6>
							<span>Author&nbsp</span>
							{elseif $comment.commenter_permission==1}
							<h6 class="comment-name by-author"><a style="color:darkgreen;text-decoration:none" href="{$BASE_URL}pages/users/view_profile.php?id={$comment.commenter_id}">{$comment.commenter}</a> </h6>
							<span>Collaborator&nbsp</span>
							{elseif $comment.commenter_permission==2}
							<h6 class="comment-name by-author"><a style="color:red;text-decoration:none" href="{$BASE_URL}pages/users/view_profile.php?id={$comment.commenter_id}">{$comment.commenter}</a> </h6>
							<span>Moderator&nbsp</span>
							{elseif $comment.commenter_permission==3}
							<h6 class="comment-name by-author"><a style="color:yellow;text-decoration:none" href="{$BASE_URL}pages/users/view_profile.php?id={$comment.commenter_id}">{$comment.commenter}</a> </h6>
							<span>Admin&nbsp</span>
							{else}
							<h6 class="comment-name by-author"><a style="text-decoration:none" href="{$BASE_URL}pages/users/view_profile.php?id={$comment.commenter_id}">{$comment.commenter}</a> </h6>
							<span>Reader&nbsp</span>
					   {/if}
							<span> {$comment.posted_date}&nbsp&nbsp&nbsp</span>
								{if $comment.sum_score<0}
								<span class="negrating" style="font-weight:bold;color:#f11066"> {$comment.sum_score}</span>
								{else}
								 <span class="posrating" style="font-weight:bold;color:#357266">+{$comment.sum_score}</span>
								{/if}
							{if $comment.commenter_id != $smarty.session.user_id}
							<i class="fa fa-flag" aria-hidden="true" data-toggle="modal"  data-target="#reportModal" onclick="report('{$comment.commenter}','{$comment.commenter_id}','{$comment.content}')"></i>
								{$rating = -1}
							{foreach $ratings as $rat}
								{if $rat.comment_id==$comment.comment_id}
									{$rating = $rat}
								{/if}
								
							{/foreach}
						
							{if dateDiffDays($article.published_date)>=100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}" disabled></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}"  disabled></i>
							{/if}
							{if ($rating==-1 || (isset($rating) && $rating.score==0)) && dateDiffDays($article.published_date)<100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')"></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')"></i>
                    		{/if}
							{if $rating.score==-1 && dateDiffDays($article.published_date)<100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')" style="color:red" name="blue"></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')" name="grey"></i>
							{/if}
							{if $rating.score==1 && dateDiffDays($article.published_date)<100}
							<i class="fa fa-thumbs-down" id="down{$comment.comment_id}"onclick="downvote('{$comment.comment_id}')" name="grey"></i>
							<i class="fa fa-thumbs-up"  id="up{$comment.comment_id}" onclick="upvote('{$comment.comment_id}')" style="color:green" name="blue"></i>
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