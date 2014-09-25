<?php

$el = new Ftw\Html\Element;
$el->tag = 'p';
$el->content = get_sub_field('text');
$el->align = get_sub_field('align');

switch (get_sub_field('type')) {
	case 'lead':
		$el->addClass('lead');
		break;
	case 'lead_sm':
		$el->addClass('lead-sm');
		break;
	case 'lead_gray':
		$el->addClass('lead-gray');
		break;
	case 'em':
		$el->addClass('emphasis');
		$el->wrapWith('em');
		break;
	case 'lg':
		$el->addClass('lg');
		break;
	case 'custom':
		$el->addClass(get_sub_field('class'));
		$el->addStyle(get_sub_field('style'));
		break;
}

echo $el->get();
