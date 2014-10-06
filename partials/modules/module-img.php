<?php

$img = wp_get_attachment_image(get_sub_field('image'), 'full');

$el = new Ftw\Html\Element;
$el->content = $img;
$el->align = get_sub_field('align');

echo $el->get();
