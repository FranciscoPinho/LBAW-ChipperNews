
   
    <div class="form-div" id="new_article">
		<form class="form-horizontal" id="form-new-article" method="post">
			<fieldset>
				<legend>New Article</legend>
				<div class="form-group">
					<label>Title:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" required id="title" placeholder="Title" name="title">
						</div>
					
				</div>
				<div class="form-group">
					<label>Article Lead:</label>
						<div class="col-lg-10">
							<textarea class="form-control" required rows="4" cols="50" id="headline" placeholder="Article Headline" name="lead"></textarea>
						</div>
					
				</div>
                <div class="form-group">
                	<label>Article Body:</label>
                 <div id="editor-container" style="width: 85%">
                        <textarea rows="15" cols="50" placeholder="Article Text" ></textarea>
                </div>
                	</div>
				<div class="form-group">
				
					<div class="col-lg-10">
						
                         <input class="form-control"  id="body" type="hidden" name="body" required>
                        
					</div>
                    
				</div>
               
                <script>
                var quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                     ['bold', 'italic','underline'],
                     ['link', 'blockquote', 'code-block', 'image','video'],
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

                </script>

				<div class="form-group">
					<label>Tags:</label>
						<div class="col-lg-10">
							<textarea class="form-control" required id="tags" placeholder="Tags" name="tags"></textarea>
						</div>
					
				</div>
				<div class="form-group">
					<label>Image:</label>
						<div class="col-lg-10">
							<input type="file" id="inputFile" name="pic" accept="image/*">
						</div>
				</div>

				<div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
			</fieldset>
			
		</form>
	</div>
      