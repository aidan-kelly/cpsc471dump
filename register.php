<?php
require_once('header.php');
?>

		<form class="form-horizontal" action='signup3.php' method="POST" id="regform">
		  <fieldset>
			<div id="legend">
			  <legend class="">Register</legend>
			</div>
	

			<div class="control-group">
			  <!-- Username -->
			  <label class="control-label"  for="username">Battlenet ID</label>
			  <div class="controls">
				<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
				<p class="help-block">Your battlenet ID looks something like Name#12345</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- E-mail -->
			  <label class="control-label" for="email">E-mail</label>
			  <div class="controls">
				<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
				<p class="help-block">Please provide your E-mail. This will serve as your login ID.</p>
			  </div>
			</div>


		<div class="control-group">
			  <!-- Region -->
			  <label class="control-label"  for="regions">Region</label>
			  <div class="controls">
					<select name="region">
					<?php
						$regions = get_Regions();
						foreach($regions as $region)
						{
							echo "<option value=\"" . $region[0] . "\">". $region[1] ."</option>";
						}
					?>
					</select> 
				<p class="help-block">Select your current geographic area</p>
			  </div>
			</div>
			
			
			<div class="control-group">
			  <!-- Platform -->
			  <label class="control-label"  for="platform">Platform</label>
			  <div class="controls">
					<select name="platform">
					  <option value="PC">PC</option>
					  <option value="PS4">PS4</option>
					  <option value="XB1">XB1</option>
					</select> 
				<p class="help-block">Select your platform</p>
			  </div>
			</div>
			
			
				<div class="control-group">
			  <!-- Role-->
			  <label class="control-label"  for="platform">Hero Role</label>
			  <div class="controls">
					<select multiple>
					  <option value="PC">DPS - Hitscan</option>
					  <option value="PS4">DPS - Projectile</option>
					  <option value="XB1">Off Tank</option>
					  <option value="XB1">Main Tank</option>
					  <option value="XB1">Off Support</option>
					  <option value="XB1">Main Support</option>
					</select> 
				<p class="help-block">Select which roles you play. Use ctrl(windows) / command (mac) to select multiple options. </p>
			  </div>
			</div>
			
			
			<div class="control-group">
			  <!-- Skill Rating -->
			  <label class="control-label"  for="skillrating">Skill Rating Peak</label>
			  <div class="controls">
				<input type="text" id="skillrating" name="skillrating" placeholder="" class="input-xlarge">
				<p class="help-block"> Skill rating is a value from 1 - 5000 on the competitive ladder. Please enter your current or most recent SR peak.</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- Password-->
			  <label class="control-label" for="password">Password</label>
			  <div class="controls">
				<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
				<p class="help-block">Password should be at least 4 characters</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- Password -->
			  <label class="control-label"  for="password_confirm">Password (Confirm)</label>
			  <div class="controls">
				<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
				<p class="help-block">Please confirm password</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- Button -->
			  <div class="controls">
				<button class="btn btn-success">Register</button>
			  </div>
			</div>
		  </fieldset>
		</form>

<?php
require_once('footer.php');
?>

