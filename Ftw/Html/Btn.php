<?php namespace Ftw\Html;

class Btn extends Element {

	public $tag = 'a';
	public $href;
	public $target;

	public function get() {
		$el = '';

		if ($this->align) $el .= '<div class="text-' . $this->align . '">';

		$el .= '<' . $this->tag . ' ' . $this->getAtts() . '>';

		$el .= $this->content;

		$el .= '</' . $this->tag . '>';

		if ($this->align) $el .= '</div>';

		return $el;
	}

	protected function getAtts() {
		$atts = [];

		array_push($this->classes, 'btn btn-green');

		array_push($atts, 'href="' . $this->href . '"');
		array_push($atts, 'target="' . $this->target . '"');

		if ($this->class = implode(' ', $this->classes)) {
			array_push($atts, 'class="' . $this->class . '"');
		}

		if ($this->style = implode(' ', $this->styles)) {
			array_push($atts, 'style="' . $this->style . '"');
		}

		return implode(' ', $atts);
	}

}
