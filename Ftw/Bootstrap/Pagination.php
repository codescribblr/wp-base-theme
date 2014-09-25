<?php namespace Ftw\Bootstrap;

class Pagination {

	private $html = '';
	public $totalPages;
	public $currentPage;
	public $count = 1;
	public $previousPage;
	public $nextPage;
	public $pagedUrl = '';

	public function __construct() {
		global $wp_query;
		$this->totalPages = $wp_query->max_num_pages;
		$this->setPagedUrl();
	}

	public function render() {
		if ($this->totalPages > 1) {
			$this->currentPage = max(1, get_query_var('paged'));
			$this->previousPage = $this->currentPage - 1;
			$this->nextPage = $this->currentPage + 1;

			$this->html = getPartial('bootstrap/bootstrap', 'pagination', array('pages' => $this));
		}

		return $this->html;
	}

	public function setPagedUrl($url = null) {
		$this->pagedUrl = $url ?: get_permalink(get_option('page_for_posts')) . 'page/';
	}

	public function getUrl($page) {
		return $this->pagedUrl . $page;
	}

}
