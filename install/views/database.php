<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Your database details</h1>

		<p>Firstly, we’ll need a database. Anchor needs them to store all of your blog’s information, so it’s vital you fill these in correctly. If you don’t know what these are, you’ll need to contact your webhost.</p>
	</article>

	<form method="post" action="<?php echo Uri::make('database'); ?>" autocomplete="off">
        <?php echo $messages; ?>

		<fieldset>
			<p>
			    <label for="host">Database Host</label>
    			<input id="host" name="host" value="<?php echo Input::old('host', '127.0.0.1'); ?>">

    			<i>Most likely <b>localhost</b> or <b>127.0.0.1</b>.</i>
    		</p>

			<p>
			    <label for="port">Port</label>
    			<input id="port" name="port" value="<?php echo Input::old('port', '3306'); ?>">

    			<i>Usually <b>3306</b>.</i>
    		</p>

			<p>
    			<label for="user">Username</label>
    			<input id="user" name="user" value="<?php echo Input::old('user', 'root'); ?>">

    			<i>The database user, usually <b>root</b>.</i>
			</p>

			<p>
			    <label for="pass">Password</label>
    			<input id="pass" name="pass" value="<?php echo Input::old('pass'); ?>">

    			<i>Leave blank for empty password.</i>
    		</p>

			<p>
    			<label for="name">Database Name</label>
    			<input id="name" name="name" value="<?php echo Input::old('name', 'anchor'); ?>">

    			<i>Your database’s name.</i>
    		</p>

			<p>
    			<label for="collation">Collation</label>
    			<select id="collation" name="collation">
    				<?php foreach($collations as $code => $collation): ?>
    				<option value="<?php echo $code; ?>" title="<?php echo $collation; ?>"<?php if($code == 'utf8_general_ci') echo ' selected'; ?>>
    					<?php echo $code; ?>
    				</option>
    				<?php endforeach; ?>
    			</select>

    			<i>Change if <b>utf8_general_ci</b> doesn’t work.</i>
			</p>
		</fieldset>

		<section class="options">
			<button type="submit" class="btn">Next Step &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>