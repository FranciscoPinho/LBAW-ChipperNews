{foreach $articles as $article}
		<div class="container article-snip friend" id="article-snip-{$article.article_id}">
			<br>
			<a href="{$BASE_URL}pages/articles/edit.php?id={$article.article_id}"><button class="btn btn-primary pull-right edit_article" type="default">Edit Article</button></a>
			{if dateDiffDays($article.published_date)<100 && $article.archived==false}
            <h2 id="headline"><a href="{$BASE_URL}pages/articles/article.php?id={$article.article_id}" style="color:black" id="articleAnchor">{$article.title}</a></h2>
            {else}
            <h2 id="headline" ><a href="{$BASE_URL}pages/articles/article.php?id={$article.article_id}" style="color:grey" id="articleAnchor">Archived:{$article.title}</a></h2>
            {/if}
			<h6>By <a href="{$BASE_URL}pages/users/view_profile?usr={$article.authorusername}" style="color:black; font-style:italic">{$article.authorname}</a> {$article.published_date}</h6>
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
                    <button type="button" id="like" class="btn btn-default btn-circle btnlike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066">{$article.negratings}</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
            </div>
		<br>
		<a onclick="fullStory('{$article.article_id}')" style="text-decoration:none"><i class="fa fa-chevron-circle-down expand fa-2x" id="expand-{$article.article_id}" aria-hidden="true"></i></a>
		<div id="article-body-{$article.article_id}" hidden>
             {$article.content}
         <a onclick="deflateArticle('{$article.article_id}')" style="text-decoration:none"><i class="fa fa-chevron-circle-up deflate fa-2x" aria-hidden="true"></i></a>
        </div>
        <br>
    </div>
    <br>
{/foreach}