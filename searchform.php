<form action="/" method="get" class="searchform">
	<input type="search" name="s" class="searchform__input" value="<?php the_search_query(); ?>"/>
	<button type="submit" class="searchform__button"><?= __('Search', 'tkuim') ?></button>
</form>
