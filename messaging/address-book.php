<p class='topline'>
	<p>If you're not in this list, and consider yourself a regular, or are a Super User, message Andy (ID 1618104) to get added to the list.</p>
	<form method='post' action='messages.php' class='menu'>
		<input type='hidden' name='action' value='compose'/>
		<?php echo '<input type="hidden" name="timeOffset" value="' . $_POST['timeOffset'] . '"/><input type="hidden" name="returnto" value="' . $_POST['returnto'] . '"/><input type="hidden" name="from" value="' . $_POST['from'] . '"/>'; ?>
		<select name='to'>
			<option value=''>Please Select a User</option>
			<optgroup label='--Mods--'>
				<option value='1618104'>Andy Y.</option>
				<option value='175532'>Chris J.</option>
				<option value='30385'>Mark Mc</option>
				<option value='857279'>Nathan C.</option>
				<option value='643099'>R.M.</option>
			</optgroup>
			<optgroup label='--Regulars--'>
				<option value='434127'>Rich R.</option>
			</optgroup>
		</select>
		<br>
		<button type='submit'>
			Message User
		</button>
	</form>
</p>