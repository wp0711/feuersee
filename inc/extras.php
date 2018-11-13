<?php
/**
 * Get page by Name
 * 
 * Checks, if a page with a given name exists.
 */
	function get_page_by_name($pagename) {
		$pages = get_pages();

		foreach ($pages as $page) if ($page->post_name == $pagename) return $page;
			return false;
	}