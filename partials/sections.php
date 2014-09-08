<?php

if (have_rows('page_sections')) {
	while (have_rows('page_sections')) {
		the_row();

		switch (get_row_layout()) {
			case 'general':
				echo Ftw\Helpers::getPartial('sections/section', 'general');
				break;
		}
	}
}

?>