<?php

$el = new Ftw\Html\Element;
$el->content = get_sub_field('text');
$el->align = get_sub_field('align');

switch (get_sub_field('type')) {
	case 'h1':
		$el->tag = 'h1';
		break;
	case 'h2':
		$el->tag = 'h2';
		break;
	case 'h3':
		$el->tag = 'h3';
		break;
	case 'h4':
		$el->tag = 'h4';
		break;
}

echo $el->get();
