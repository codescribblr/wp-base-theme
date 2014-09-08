<?php

if (have_rows('modules')) {
	while (have_rows('modules')) {
		the_row();

		switch (get_row_layout()) {
			case 'content_with_sidebar':
				echo Ftw\Helpers::getPartial('modules/module', 'content-with-sidebar');
				break;
			case 'full_width_content':
				the_sub_field('content');
				break;
			case 'heading_with_subheading':
				echo Ftw\Helpers::getPartial('modules/module', 'heading-with-subheading');
				break;
			case 'three_columns':
				echo Ftw\Helpers::getPartial('modules/module', 'three-columns');
				break;
			case 'horizontal_divider':
				echo '<hr />';
				break;
		}
	}
}

?>
