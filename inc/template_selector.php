<form action="">
	<select name="t" class="form-control">
		<?php 
			foreach ($templates as $template) {
				echo "<option value=" . $template . ">" . $template . "</option>";
			}
		?>
	</select>
	<button type="submit">Change</button>	
</form>