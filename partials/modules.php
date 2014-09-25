<?php

if (have_rows('modules')) {
	while (have_rows('modules')) {
		the_row();

		switch (get_row_layout()) {
			case 'heading':
				echo getPartial('modules/module', 'heading');
				break;
			case 'paragraph':
				echo getPartial('modules/module', 'paragraph');
				break;
			case 'btn':
				echo getPartial('modules/module', 'btn');
				break;
			case 'hr':
				echo '<hr />';
				break;
			case 'spacing':
				if ($size = get_sub_field('size')) echo '<div style="clear: both; height: ' . $size . 'px;"></div>';
				break;
			case 'full_width_content':
				the_sub_field('content');
				break;
			case 'cols_2':
				echo getPartial('modules/module', 'cols-2');
				break;
			case 'cols_3':
				echo getPartial('modules/module', 'cols-3');
				break;
			case 'cols_4':
				echo getPartial('modules/module', 'cols-4');
				break;
		}
	}
}

?>
