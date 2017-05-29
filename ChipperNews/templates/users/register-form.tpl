<div class="container form-div" id="register">
<br>
	<div class="logo">
		<a href="{$BASE_URL}pages/search/frontpage.php">
			<img class="logo" src="{$BASE_URL}images/assets/logo_navigation.png" alt="Chipper News" align="middle">
		</a>
	</div>
	<form class="form-horizontal" id="fregister" method="post">
	<br>
		<fieldset class="responsive-fieldset">
			<legend>Register Page</legend>
			<div class="form-group">
				<label> Username <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="container col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
						<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
						    required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Name <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card-o fa-fw"></i></span>
						<input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Email <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
						<input type="email" class="form-control" id="email" placeholder="your@email.com" name="email" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Password <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
					</div>
					<div class="col-sm-12">
						<p class="help-block">Should be at least 8 characters long.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Confirm Password <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
						<input type="password" class="form-control" id="passw2" placeholder="Confirm password" name="password2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Date of birth </label>
				<div class="col-sm-12">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
					<input type="date" class="form-control" id="birthdate" placeholder="Date of birth" name="birthdate">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Short Bio </label>
				<div class="col-sm-12">
					<textarea class="form-control" rows="10" cols="30" id="bio" name="bio"></textarea>
					<p class="help-block">Tell everyone a bit about yourself!</p>
				</div>
			</div>
			<div class="form-group">
				<label> Select your country <br>  </label>
				<div class="col-sm-12">
					<select class="form-control" name="local_id" id="local">
						<option label="(none)" value="null">Pick one...</option>
       			 	{foreach from=$countries item=name key=id}
         			 {if $id eq $FORM_VALUES.id}
          				<option label="{$name}" value="{$id}" selected>{$name}</option>
         			 {else}
         			 <option label="{$name}" value="{$id}">{$name}</option>
         			 {/if}
        			{/foreach}
     				 </select>
				</div>
			</div>
			<br>
			<br><br>
			<div class="form-group" id="tagselection">
			<label class="text-center"> Select your interests <br><br>  </label>
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
								<tr><input type="checkbox" name="tags[]" value={$progcat['sub_id']}>{$progcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div  id="hardtable" hidden>
							<table class="table">
								{foreach from=$hardware item=hardcat}
								<tr><input type="checkbox" name="tags[]" value={$hardcat['sub_id']}>{$hardcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="softtable" hidden>
							<table class="table">
								{foreach from=$software item=softcat}
								<tr><input type="checkbox" name="tags[]" value={$softcat['sub_id']}>{$softcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="indtable" hidden>
							<table class="table">
								{foreach from=$industry item=indcat}
								<tr><input type="checkbox" name="tags[]" value={$indcat['sub_id']}>{$indcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="techtable" hidden>
							<table class="table">
								{foreach from=$technology item=techcat}
								<tr><input type="checkbox" name="tags[]" value={$techcat['sub_id']}>{$techcat['name']}</tr><br>
								{/foreach}
							</table>
						</div>
					</td>

					<td>
						<div id="othertable" hidden>
							<table class="table">
								{foreach from=$others item=othercat}
								<tr><input type="checkbox" name="tags[]" value={$othercat['sub_id']}>{$othercat['name']}</tr><br>
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
				<label for="inputFile">Upload an avatar</label>
				<div class="col-sm-8">
					<input type="file" id="inputFile" name="pic" accept="image/*">
				</div>
				<div class="col-sm-8">
					<p class="help-block">Accepted files consist of all image formats.</p>
				</div>
			</div>
			<div class="container" id="note">
				<div class="footnote">
					<small> Fields with an asterisk (<i class="fa fa-asterisk" aria-hidden="false"></i>) are mandatory. </small>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-4">
					<button type="reset" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			<br>
		</fieldset>
		<br>
	</form>
</div>