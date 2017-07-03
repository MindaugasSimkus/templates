<form action="" method="POST" class="form-inline">
	<select name="t" class="form-control">
		<?php 
			foreach ($templates as $template) {
				echo "<option value=" . $template . ">" . $template . "</option>";
			}
		?>
	</select>
	<button class="btn" type="submit">Change</button>	
</form>