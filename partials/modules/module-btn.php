<?php

$el = new Ftw\Html\Btn;
$el->content = get_sub_field('text');
$el->align = get_sub_field('align');
$el->href = get_sub_field('url');
$el->target = get_sub_field('new_window') ? '_blank' : '_self';

echo $el->get();
