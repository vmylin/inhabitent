<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html('Search'); ?></span>
		</button>
		<label>
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>