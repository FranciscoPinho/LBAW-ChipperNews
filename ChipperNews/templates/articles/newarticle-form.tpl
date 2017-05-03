
  <div class="form-div" id="new_article">
		<form  method="post">
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
				
                <div class="form-group" id="bodybox" style="
												max-width:75%;
												
												margin-left:0;">
                	<label style="display: block;
								 padding-left:0;
 								 margin-left:0;
								 margin-bottom: 0px;">Article Body:</label>
                 <div id="editor-container" style=" min-height: 100px;
  display: block;
  clear: both;">
                        <textarea id="contentstuff"></textarea>
				 </div>
				    <input class="form-control"  id="body" type="hidden" name="body" required>
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

				<div class="form-group" id="tagselection">
					<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>	
							<th onclick="columnClick('1')">Programming</th>
							<th onclick="columnClick('2')">Hardware</th>
							<th onclick="columnClick('3')">Software</th>
							<th onclick="columnClick('4')">Industry</th>
							<th onclick="columnClick('5')">Technology</th>
							<th onclick="columnClick('6')">Others</th>
						</tr>
						</thead>
					<tbody>
					<tr>

					<td>
						<div id="progtable" hidden>
							<table class="table">
								{foreach from=$programming item=progcat}
								<tr><input type="checkbox" name="tags" value={$progcat['sub_id']}>{$progcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div  id="hardtable" hidden>
							<table class="table">
								{foreach from=$hardware item=hardcat}
								<tr><input type="checkbox" name="tags" value={$hardcat['sub_id']}>{$hardcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="softtable" hidden>
							<table class="table">
								{foreach from=$software item=softcat}
								<tr><input type="checkbox" name="tags" value={$softcat['sub_id']}>{$softcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="indtable" hidden>
							<table class="table">
								{foreach from=$industry item=indcat}
								<tr><input type="checkbox" name="tags" value={$indcat['sub_id']}>{$indcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="techtable" hidden>
							<table class="table">
								{foreach from=$technology item=techcat}
								<tr><input type="checkbox" name="tags" value={$techcat['sub_id']}>{$techcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="othertable" hidden>
							<table class="table">
								{foreach from=$others item=othercat}
								<tr><input type="checkbox" name="tags" value={$othercat['sub_id']}>{$othercat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>
					</tr>
					</tbody>
					</table>
					
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
      