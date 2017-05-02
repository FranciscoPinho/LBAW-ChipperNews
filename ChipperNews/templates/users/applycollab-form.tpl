<div class="container form-div" id="applycollab">
        <div class="logo">
           	<a href="{$BASE_URL}pages/search/frontpage.php">
               <img class="logo" src="{$BASE_URL}images/assets/logo_navigation.png" alt="Chipper News" align="middle">
            </a>
        </div>
        <form class="form-horizontal" id="fapplycollab" method="post">
            <fieldset class="responsive-fieldset">
                <legend>Apply for Collaborator</legend>
                <div class="form-group">
                    <label> Full name <i class="fa fa-asterisk" aria-hidden="false"></i></label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-id-card-o"></i></button>
                            </div>
							{if $FORM_VALUES.fullname}
							<input type="text" class="form-control" id="fullname" placeholder="Please input your full name." name="fullname"
								value="{$FORM_VALUES.fullname}" required> {else}
							<input type="text" class="form-control" id="fullname" placeholder="Please input your full name." name="fullname"
								required> {/if}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label> Describe yourself and your achievements briefly <i class="fa fa-asterisk" aria-hidden="false"></i></label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="description" name="description" required></textarea>
                        <span class="help-block">Please do your best to summarise.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label> What is your motivation for applying to this position <i class="fa fa-asterisk" aria-hidden="false"></i></label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="motivation" placeholder="Your motivation" name="motivation" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label> References from previous employers </label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="refs" placeholder="Your references" name="refs"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label> News outlets you're currently associated with </label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="assoc" placeholder="Associated outlets" name="assoc"></textarea>
                    </div>
                </div>
                <!--<label> Image <input type="file" id="uploadImage" name="pic" accept="image/id"></label>-->
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
            </fieldset>
        </form>
    </div>