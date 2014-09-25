<?php

if (have_rows('page_sections', $pageId)) {
	while (have_rows('page_sections', $pageId)) {
		the_row();

		switch (get_row_layout()) {
			case 'general':
				echo getPartial('sections/section', 'general');
				break;
		}
	}
}

?>
