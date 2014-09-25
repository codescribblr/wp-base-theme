<?php namespace Ftw\Html;

use stdClass;

class Element {

	public $tag = 'div';
	public $isSelfClosing = false;
	public $classes = [];
	public $styles = [];
	public $align = 'left';
	public $content = '';
	protected $class = '';
	protected $style = '';
	protected $wrap;

	public function addClass($class, $overwrite = false) {
		if (preg_match('/text-[left|center|right]/', $class)) $this->align = null;

		if ($overwrite) {
			$this->classes = [$class];
		} else {
			array_push($this->classes, $class);
		}
	}

	public function addStyle($style, $overwrite = false) {
		if ($overwrite) {
			$this->styles = [$style];
		} else {
			array_push($this->styles, $style);
		}
	}

	public function wrapWith($tag, $inside = true) {
		$this->wrap = new stdClass;
		$this->wrap->tag = $tag;
		$this->wrap->inside = $inside;
	}

	public function get() {
		$el = '';

		if ($this->wrap && !$this->wrap->inside) $el .= '<' . $this->wrap->tag . '>';

		$el .= '<' . $this->tag . ' ' . $this->getAtts() . '>';

		if ($this->wrap && $this->wrap->inside) $el .= '<' . $this->wrap->tag . '>';
		$el .= $this->content;
		if ($this->wrap && $this->wrap->inside) $el .= '</' . $this->wrap->tag . '>';

		$el .= $this->isSelfClosing ? ' />' : '</' . $this->tag . '>';

		if ($this->wrap && !$this->wrap->inside) $el .= '</' . $this->wrap->tag . '>';

		return $el;
	}

	protected function setClass() {
		$this->class = implode(' ', $this->classes);
	}

	protected function setStyle() {
		$this->style = implode(' ', $this->styles);
	}

	protected function getAtts() {
		if ($this->align) $this->addClass('text-' . $this->align);

		$atts = [];

		if ($this->class = implode(' ', $this->classes)) {
			array_push($atts, 'class="' . $this->class . '"');
		}

		if ($this->style = implode(' ', $this->styles)) {
			array_push($atts, 'style="' . $this->style . '"');
		}

		return implode(' ', $atts);
	}

}
