<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 10:17:15
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99458f68e110fca77-59367740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8bdb20c84491cce795cb8192d7512ce84cc1628' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\register.tpl',
      1 => 1492595928,
      2 => 'file',
    ),
    'c5a51a8eb83d205c2f8fb9256bad303bf7b032ed' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\register-form.tpl',
      1 => 1492597030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99458f68e110fca77-59367740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f68e11164101_56914399',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f68e11164101_56914399')) {function content_58f68e11164101_56914399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="ink-grid content-drawer">
  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php"
        class="ink-form ink-formvalidator xlarge-60 large-70 medium-90 all-100 push-center quarter-vertical-padding"
        enctype="multipart/form-data" method="post" data-lang="en_GB">
    <?php /*  Call merged included template "users/register-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('users/register-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '99458f68e110fca77-59367740');
content_58f7392b44fe96_50411091($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "users/register-form.tpl" */?>
  </form>
</div>



<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 10:17:15
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\register-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58f7392b44fe96_50411091')) {function content_58f7392b44fe96_50411091($_smarty_tpl) {?><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles-forms.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Optional Bootstrap theme -->
	<!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<form class="form-horizontal" id="fregister" method="post">
	<fieldset class="responsive-fieldset">
		<legend>Register Page</legend>
		<div class="form-group">
			<label> Username <i class="fa fa-asterisk" aria-hidden="false"></i></label>
			<div class="container col-sm-12">
				<div class="input-group">
					<div class="input-group-btn">
						<button class="btn btn-default"><i class="fa fa-user"></i></button>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['username']) {?>
					<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
					    value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
" data-rules="required|alpha_numeric"> 
						<?php } else { ?>
					<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
					    data-rules="required|alpha_numeric"> 
						<?php }?>
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
					<input type="text" class="form-control" id="fullname" placeholder="Jane Doe" name="fullname" required>
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
					<input type="email" class="form-control" id="email" placeholder="your@email.com" name="email" required>
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
					<input type="password" class="form-control" id="passw" placeholder="Password" name="passw" required>
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
					<input type="password" class="form-control" id="passw2" placeholder="Confirm password" name="passw2" required>
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
			<label> Interests <i class="fa fa-asterisk" aria-hidden="false"></i></label>
			<div class="col-sm-12">
				<textarea class="form-control" rows="8" cols="50" id="interests" placeholder="Reading, philosophy" name="interests" required></textarea>
			</div>

		</div>
		<div class="form-group">
			<label> Select your country <br>  </label>
			<div class="col-sm-12">
				<select class="form-control" id="select">
          <option value="AF">Afghanistan</option>
	<option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
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
	</fieldset>
</form><?php }} ?>
