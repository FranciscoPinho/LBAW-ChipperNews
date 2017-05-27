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
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-user"></i></button>
						</div>
						{if $FORM_VALUES.username}
						<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
						    value="{$FORM_VALUES.username}" required> {else}
						<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
						    required> {/if}
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Name <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-id-card-o"></i></button>
						</div>
						{if $FORM_VALUES.name}
						<input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name" value="{$FORM_VALUES.name}"
						    required> 
							{else}
						<input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name" required>						{/if}
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Email <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-envelope-o"></i></button>
						</div>
						{if $FORM_VALUES.email}
						<input type="email" class="form-control" id="email" placeholder="your@email.com" name="email" value="{$FORM_VALUES.email}"
						    required> {else}
						<input type="email" class="form-control" id="email" placeholder="your@email.com" name="email" required>
						{/if}
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Password <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-unlock-alt"></i></button>
						</div>
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
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-unlock-alt"></i></button>
						</div>
						<input type="password" class="form-control" id="passw2" placeholder="Confirm password" name="password2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Date of birth </label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-calendar"></i></button>
						</div>
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