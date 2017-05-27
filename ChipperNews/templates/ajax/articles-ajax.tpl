{while $indexA < $indexB}
    <div class="row " style="padding-left:4%;padding-right:4% ">
            {$art = $articles[$indexA] }
			{if $art.title != ""}
            {$subcategories = fetchSubcategories($art.article_id)}
            <div class="col-6 col-lg-4 ">
            <h2><a class="titlelink" href="{$BASE_URL}pages/articles/article.php?id={$art.article_id}">{$art.title}</a></h2>
             <img src="{$BASE_URL}images\articles\{$art.article_id}" alt="... " style="width:70%;height:70%;">
             <div id="ratings">
                        <span id="postext4" style="color:#357266">{$art.posratings}</span>
                        <button type="button" class="btn btn-default btn-circle btnlike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
                        </button>
                        <span id="negtext4" style="color:#f11066">{$art.negratings}</span>
                        <button type="button" class="btn btn-default btn-circle btndislike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
                        </button>
			</div>
            <h6>By <a href={$BASE_URL}pages/users/viewprofile?id={$art.author} style="color:black; font-style:italic">{$art.authorname}</a> {$art.published_date}</h6>
            <p>{$art.lead}</p>
            {foreach $subcategories as $sub}
               {if $sub.category==1}
                 <span class="label label-primary ">{$sub.name}</span>
               {/if}
               {if $sub.category==2}
                  <span class="label label-warning ">{$sub.name}</span>
               {/if}
               {if $sub.category==3}
                  <span class="label label-info ">{$sub.name}</span>
               {/if}
               {if $sub.category==4}
                  <span class="label label-default ">{$sub.name}</span>
               {/if}
               {if $sub.category==5}
                  <span class="label label-danger ">{$sub.name}</span>
               {/if}
               {if $sub.category==6}
                  <span class="label label-success ">{$sub.name}</span>
               {/if}     
            {/foreach}
            </div>
			{/if}

            {$art = $articles[$indexA+1]}
			{if $art.title != ""}
            {$subcategories = fetchSubcategories($art.article_id)}
            <div class="col-6 col-lg-4 ">
            <h2><a class="titlelink" href="{$BASE_URL}pages/articles/article.php?id={$art.article_id}">{$art.title}</a></h2>
             <div id="ratings">
                        <span id="postext4" style="color:#357266">{$art.posratings}</span>
                        <button type="button" class="btn btn-default btn-circle btnlike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
                        </button>
                        <span id="negtext4" style="color:#f11066">{$art.negratings}</span>
                        <button type="button" class="btn btn-default btn-circle btndislike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
                        </button>
			</div>
            	<h6>By <a href={$BASE_URL}pages/users/viewprofile?id={$art.author} style="color:black; font-style:italic">{$art.authorname}</a> {$art.published_date}</h6>
            <p>{$art.lead}</p>
            {foreach $subcategories as $sub}
               {if $sub.category==1}
                 <span class="label label-primary ">{$sub.name}</span>
               {/if}
               {if $sub.category==2}
                  <span class="label label-warning ">{$sub.name}</span>
               {/if}
               {if $sub.category==3}
                  <span class="label label-info ">{$sub.name}</span>
               {/if}
               {if $sub.category==4}
                  <span class="label label-default ">{$sub.name}</span>
               {/if}
               {if $sub.category==5}
                  <span class="label label-danger ">{$sub.name}</span>
               {/if}
               {if $sub.category==6}
                  <span class="label label-success ">{$sub.name}</span>
               {/if}     
            {/foreach}
            </div>
			{/if}

            {$art = $articles[$indexA+2]}
			{if $art.title != ""}
            {$subcategories = fetchSubcategories($art.article_id)}
            <div class="col-6 col-lg-4 ">
            <h2><a class="titlelink" href="{$BASE_URL}pages/articles/article.php?id={$art.article_id}">{$art.title}</a></h2>
             <div id="ratings">
                        <span id="postext4" style="color:#357266">{$art.posratings}</span>
                        <button type="button" class="btn btn-default btn-circle btnlike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
                        </button>
                        <span id="negtext4" style="color:#f11066">{$art.negratings}</span>
                        <button type="button" class="btn btn-default btn-circle btndislike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
                        </button>
			</div>
            	<h6>By <a href={$BASE_URL}pages/users/viewprofile?id={$art.author} style="color:black; font-style:italic">{$art.authorname}</a> {$art.published_date}</h6>
            <p>{$art.lead}</p>
            {foreach $subcategories as $sub}
               {if $sub.category==1}
                 <span class="label label-primary ">{$sub.name}</span>
               {/if}
               {if $sub.category==2}
                  <span class="label label-warning ">{$sub.name}</span>
               {/if}
               {if $sub.category==3}
                  <span class="label label-info ">{$sub.name}</span>
               {/if}
               {if $sub.category==4}
                  <span class="label label-default ">{$sub.name}</span>
               {/if}
               {if $sub.category==5}
                  <span class="label label-danger ">{$sub.name}</span>
               {/if}
               {if $sub.category==6}
                  <span class="label label-success ">{$sub.name}</span>
               {/if}     
            {/foreach}
            </div>
			{/if}
        </div>

        {$indexA = $indexA+3}
{/while}