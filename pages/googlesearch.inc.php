<form action="index.php" method="get">

	<div class="content" align="right">

		<input type="text" class="textfield" name="q" size="20" placeholder='search'/>

		<input type="submit" class="button" name="sa" id="searchglass"/>

		<input type="hidden" name="cx" value="<?php echo $options['google_cse_cx']; ?>" />

		<input type="hidden" name="ie" value="UTF-8" />
		<input type="hidden" name="p" value="websearch" />

	</div>

</form>
