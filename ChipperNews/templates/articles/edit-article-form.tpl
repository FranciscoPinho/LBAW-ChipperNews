<div class="form-div" id="new_article">
		<form  method="post">
			<fieldset>
				<legend>Edit Article</legend>
				<div class="form-group">
					<label>Title:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control center-block" required id="title" placeholder="Title" value="{$article.title}" name="title">
						</div>
                        <input type="hidden" required id="article_id" value="{$article.article_id}" name="article_id">
				</div>
				<div class="form-group">
					<label>Article Lead:</label>
						<div class="col-lg-10">
							<textarea class="form-control center-block" required rows="4" cols="50" id="headline" name="lead">{$article.lead}</textarea>
						</div>
					
				</div>
				
                <div class="form-group">
                	<label >Article Body:</label>
                        <div class="col-lg-10">
                        <textarea class="form-control center-block widgEditor" required rows="10" cols="50" id="body"  name="body">{$article.content}</textarea>
                        </div>
				
                </div>
                <br><br>    
				<div class="form-group">
                    <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary center-block">Update</button>
                    </div>
                </div>
			</fieldset>
			
		</form>
	</div>
      