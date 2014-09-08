<?php namespace Ftw;

class Shortcodes {

	protected $data = [
		'content' => ''
	];

	protected function getPartial($name) {
		return Helpers::getPartial('shortcode', $name, $this->data);
	}

}
